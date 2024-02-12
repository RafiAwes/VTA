<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\batch;
use App\Models\student;
use App\Models\financeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class financeController extends Controller
{
    public function viewFinanceDashboard(){
        return view('finance.finance_dashboard');
    }

    public function viewPaymentPage(){
        $batches = batch::all();

        return view('finance.monthlyFees',['batches' => $batches]);
    }

    public function fetchStudents(Request $request): JsonResponse
    {
        $data['students'] = student::where('slot_id', $request->batch_id)->get();
        return response()->json($data);
    }

    public function submitMonthlyFee(Request $request){

        $admissionFee = student::where('id', $request->student_id)
                        ->where('batch_id', $request->batch_id )
                        ->select('admission_fees')
                        ->first();

        financeModel::where('student_id', $request->student_id)
            ->where('batch_id', $request->batch_id)
            ->insert([
                'student_id' => $request->student_id,
                'admission_fees' => $admissionFee,
                'amount' => $request->amount,
                'month' => $request->month,
                'year' => Carbon::now()->format('Y'),
                'type' => "Monthly Fee",
                'created_at' => Carbon::now(),
            ]);
    }

    public function submitTournamentFee(Request $request){

        $admissionFee = student::where('id', $request->student_id)
                        ->where('batch_id', $request->batch_id )
                        ->select('admission_fees')
                        ->first();

        financeModel::where('student_id', $request->student_id)
            ->where('batch_id', $request->batch_id)
            ->insert([
                'student_id' => $request->student_id,
                'admission_fees' => $admissionFee,
                'amount' => $request->amount,
                'month' => $request->month,
                'year' => Carbon::now()->format('Y'),
                'type' => "Tournament Fee",
                'created_at' => Carbon::now(),
            ]);
    }

    public function submitDressFee(Request $request){

        $admissionFee = student::where('id', $request->student_id)
                        ->where('batch_id', $request->batch_id )
                        ->select('admission_fees')
                        ->first();

        financeModel::where('student_id', $request->student_id)
            ->where('batch_id', $request->batch_id)
            ->insert([
                'student_id' => $request->student_id,
                'admission_fees' => $admissionFee,
                'amount' => $request->amount,
                'month' => $request->month,
                'year' => Carbon::now()->format('Y'),
                'type' => "Dress Fee",
                'created_at' => Carbon::now(),
            ]);
    }

    public function submitBeltTestFee(Request $request){

        $admissionFee = student::where('id', $request->student_id)
                        ->where('batch_id', $request->batch_id )
                        ->select('admission_fees')
                        ->first();

        financeModel::where('student_id', $request->student_id)
            ->where('batch_id', $request->batch_id)
            ->insert([
                'student_id' => $request->student_id,
                'admission_fees' => $admissionFee,
                'amount' => $request->amount,
                'month' => $request->month,
                'year' => Carbon::now()->format('Y'),
                'type' => "Belt Test Fee",
                'created_at' => Carbon::now(),
            ]);
    }

    

}

