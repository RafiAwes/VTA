<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\attendance;
use App\Models\slotModel;
use Carbon\Carbon;

class attendanceController extends Controller
{
    public function viewBatchPage(){
        $batches = slotModel::all();
        return view('attendance.batchAttendance', compact('batches'));
    }

    public function attendancePage($id){
        $students = student::where('slot_id',$id)->orderBy('id','asc')->paginate(10);

        return view('attendance.attendancePage', compact('students','id'));
    }

    public function saveAttendance(Request $request){
        foreach($request->input('attendance') as $studentId => $isChecked) {
            $status = $isChecked ? 'present' : 'absent';
            attendance::insert([
                "student_id" => $studentId,
                "batch_id" => $request->batch_id,
                "status" => $status,
                "submission_date" => Carbon::now()->toDateString(),
                "month_name" => Carbon::now()->format('F'),
                "year" => Carbon::now()->year,
                "created_at" => Carbon::now()
            ]);
        }
        return redirect()->route('take.attendance');
    }

    public function viewAttendStudent($id){
        $currentDate = Carbon::now()->toDateString();

        $attendants = Attendance::select('attendances.*', 'students.*','slot_models.*')
            ->join('slot_models', 'attendances.batch_id', '=', 'slot_models.id')
            ->join('students', 'attendances.student_id', '=', 'students.id')
            ->where('batch_id', $id)
            ->whereDate('submission_date', $currentDate)
            ->orderBy('attendances.id','asc')
            ->paginate(10);

        return view('attendance.viewDayAttendance',compact('attendants'));
    }
}
