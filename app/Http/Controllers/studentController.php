<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\slotModel;
use App\Models\attendance;
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
        $attendDays = Attendance::select('attendances.*', 'students.*','slot_models.*')
                    ->join('slot_models', 'attendances.batch_id', '=', 'slot_models.id')
                    ->join('students', 'attendances.student_id', '=', 'students.id')
                    ->where('student_id', $id)
                    ->get();
                    // ->whereDate('submission_date', $currentDate)
                    // ->orderBy('attendances.id','asc')
                    // ->paginate(10);



        return view('student.student',compact('student','attendDays'));
    }
}
