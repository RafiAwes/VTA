<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\slotModel;
use Carbon\Carbon;

class attendanceController extends Controller
{
    public function viewAttendancepage(){
        $batches = slotModel::all();
        return view('attendance.batchAttendance', compact('batches'));
    }
}
