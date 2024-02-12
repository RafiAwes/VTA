<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\batch;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class admissionController extends Controller
{
    public function admitForm()
    {
        $batches = batch::where('status','active')
        ->orderBy('id','asc')
        ->get();

        return view('admission.admissionForm',['batches' => $batches]);
    }

    public function admitStudent(Request $request)
    {
        if ($request->hasFile('image')) {
            // Image processing
            $get_image = $request->file('image');
            $image_name = str_replace(" ", "_", $request->student_name) . '.' . $get_image->getClientOriginalExtension();
            Image::make($get_image)->save('student_image/' . $image_name, 100);

            // ID generator
            $currentYear = Carbon::now()->format('y');
            $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $uniqueId = 'st' . $currentYear . $randomPart;

            // Check if the generated ID already exists
            while (student::where('s_code', $uniqueId)->exists()) {
                $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $uniqueId = 'st' . $currentYear . $randomPart;
            }


            $totalFees = $request->payableFees - $request->admissionFees;

            $batches = batch::all();

            student::insert([
                "student_name" => $request->student_name,
                "father_name" => $request->father_name,
                "mother_name" => $request->mother_name,
                "image" => 'student_image/' . $image_name,
                "address" => $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "mobile_number" => $request->mobile_number,
                "email" => $request->email,
                "date_of_joining" => Carbon::now(),
                "gender" => $request->gender,
                "s_code" => $uniqueId,
                "slot_id" => $request->batch_id,
                "attended_class" => 0,
                "fees" => $totalFees,
                "status" => 'learning',
                "created_at" => Carbon::now(),
            ]);

            return back();
        } else {
            echo ("no Image");
        }
    }
}
