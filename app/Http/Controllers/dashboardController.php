<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\batch;
use App\Models\attendance;
use Carbon\Carbon;
use Toastr;

class dashboardController extends Controller
{
    public function dashboard(){

        $batchesCount = batch::count();
        $batches = batch::all();
        $studentCount = student::where('status','learning')->count();
        $students = student::where('status','learning')->get();
        $cStudents = student::where('status','Completed')->count();
        $dStudents = student::where('status','dropped')->count();

        return view('dashboard.dashboard', compact('batchesCount','batches','studentCount','students','cStudents','dStudents'));
    }
}
