<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\attendance;
use App\Models\batch;
use Carbon\Carbon;
use Toastr;

class attendanceController extends Controller
{
    public function viewBatchPage(){
        $batches = slotModel::all();
        return view('attendance.batchAttendance', compact('batches'));
    }


    public function attendancePage($id){

        $students = student::where('slot_id',$id)->orderBy('id','asc')->paginate(100);
        $batch = batch::find($id);
        $batchDays = explode(',', $batch->days);

        $batches = batch::all();

        $currentDay = date('l');
        // dd($currentDay);
        $notAllowed = attendance::where('batch_id',$id)
                    ->whereDate('submission_date',now()->toDateString())
                    ->exists();

                    if($batch) { // Check if the batch exists
                        $batchDays = array_map('trim', $batchDays); // Trim spaces from each element in the array

                        if (!empty($batchDays) && in_array($currentDay, $batchDays, true)) {
                            if($notAllowed){
                                Toastr::success('Ooops', 'Already taken', ["positionClass" => "toast-top-center"]);
                                return back();
                            }else{
                                Toastr::success('Attendance', 'Take todays attendance', ["positionClass" => "toast-top-center"]);
                                return view('attendance.attendancePage', compact('students','id'));
                            }

                        } else {
                            Toastr::warning('This class is not available today', 'Ooops', ["positionClass" => "toast-top-center"]);
                            return back();
                        }
                    } else {
                        Toastr::error('Batch not found', 'Error', ["positionClass" => "toast-top-center"]);
                        return back();
                    }
        // if($notAllowed){
        //     Toastr::success('Ooops', 'Already taken', ["positionClass" => "toast-top-center"]);
        //     return back();
        // }else{

        // }


    }


    public function saveAttendance(Request $request){
        // finding the batch with batch id and decoding days
        $batch = batch::find($request->batch_id);
        $total_class = $batch->total_classes;

        // $slot = SlotModel::find($request->batch_id);
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
            $stdnt = student::find($studentId);
            $stdnt->increment('attended_class');

            $stdnt_cls = $stdnt->attended_class;
            $total_class = $batch->total_classes;
            if($stdnt_cls >= $total_class){
                // $stdnt->update(['status' => 'Completed']);
                // dd($stdnt->status);
                student::where('id',$studentId)->update(['status' => 'Completed']);
            }
        }

        $batch->increment('classes_done');
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
