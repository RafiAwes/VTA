<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\attendance;
use App\Models\slotModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AttendanceExport;

class ExportController extends Controller
{
    public function export()
    {
        // $array = student::select('students.*','slot_models.*')
        // ->join('slot_models', 'students.batch_id', '=', 'slot_models.id')
        // ->toArray();
        return Excel::download(new AttendanceExport, 'students.xlsx');
    }
}
