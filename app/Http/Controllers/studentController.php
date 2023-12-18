<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\slotModel;
use Carbon\Carbon;

class studentController extends Controller
{
    public function studentDetails($id){

        // $student = studentModel::where('id',$id)->first();

        $student = DB::table('students')
                    ->join('slot_models', 'slot_models.id', '=', 'students.slot_id')
                    ->where('students.id',$id)
                    ->select('students.*', 'slot_models.batch_name')
                    ->first();



        return view('student.student',compact('student'));
    }
}
