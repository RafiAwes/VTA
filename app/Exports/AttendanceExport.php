<?php

namespace App\Exports;

use App\Models\student;
use App\Models\attdence;
use App\Models\slotModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;


class AttendanceExport implements FromCollection, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Student::select('students.student_name','students.s_code','slot_models.batch_name','students.address','students.date_of_birth','students.height','students.weight','students.mobile_number','students.email','students.date_of_joining','students.gender')
            ->join('slot_models', 'students.slot_id', '=', 'slot_models.id')
            ->get());
    }

    public function headings(): array
    {
        // Define your column headings here
        return [
            'Student Name',
            'Student ID',
            'Batch',
            'Address',
            'Date of birth',
            'Height',
            'Weight',
            'Mobile No.',
            'Email',
            'Joining Date',
            'Gender',
            // Add more columns as needed
        ];
    }
}
