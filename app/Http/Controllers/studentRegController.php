<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\studentModel;
use Carbon\Carbon;
use Image;

class studentRegController extends Controller
{
    public function admitStudent(Request $request){
        if($request->hasFile('image')){
            $validategender = $request->validate([
                'gender' => 'required|in:Male,Female',
            ]);
            $get_image = $request->file('image');
            $image_name = str_replace(" ", "_", $request->student_name).'.'.$get_image->getClientOriginalExtension();
            studentModel::insert([
                "student_name" => $request->student_name,
                "father_name" => $request->father_name,
                "mother_name"=> $request->mother_name,
                "image"=> 'student_image/'.$image_name,
                "address"=> $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "mobile_number"=> $request->mobile_number,
                "date_of_joining"=> $request->date_of_joining,
                "gender"=> $request->input(gender),
                "created_at"=> Carbon::now()
            ]);

        }

    }

}
