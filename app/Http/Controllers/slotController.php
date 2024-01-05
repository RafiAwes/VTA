<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\slotModel;
use Carbon\Carbon;
use Toastr;

class slotController extends Controller
{
    public function showSlots(){
        $batches = slotModel::all();
        $count_student = student::where('slot_id','slot_models.id')->count();

        return view('slots.slotHomePage',['batches' => $batches, 'count_student'=>$count_student]);
    }
    public function newSlotPage(){
        return view('slots.makeSlots');
    }

    public function createBatch(Request $request){

        $request->validate([
            'batch_name' => 'required',
            'total_classes' => 'required',
            'starting_date' => 'required',
            'numberOfStudents' => 'required',
            'class_time' => 'required',
            'days' => 'required',
        ]);

        $multichecks = $request->input('days');
        $days = implode(',', $multichecks);
        $batch = slotModel::where('class_time',$request->class_time)->exists();
        $d = slotModel::where('days',$days)->exists();
        if($d && $batch){
            Toastr::error('Ooops', 'Time and days already exists', ["positionClass" => "toast-top-center"]);
            return redirect()->route('make.slots');
        }else{
            slotModel::insert([
                "batch_name" => $request->batch_name,
                "total_classes" => $request->total_classes,
                "starting_date" => $request->starting_date,
                "number_of_students" => $request->numberOfStudents,
                "class_time" => $request->class_time,
                "days" => $days,
                "status" => 'active',
                "classes_done" => 0,
                "created_at"=> carbon::now(),
            ]);
            Toastr::success('New slot created', 'Created', ["positionClass" => "toast-top-center"]);

            return redirect()->route('view.slots');
        }

    }

    public function viewBatch($id){

        $batch = slotModel::where('id',$id)->first();
        $students = student::where('slot_id',$id)->where('status','learning')->orderBy('id','asc')->paginate(10);
        $count_student = student::where('slot_id',$id)->count();
        return view('slots.batchPage',compact('batch','students','count_student'));
    }
}
