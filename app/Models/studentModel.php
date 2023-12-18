<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    use HasFactory;

    protected $fillable = ['s_code','student_name','address'];
    protected $table = 'studentModel';
    protected static function boot()
    {
        parent::boot();
        // //function to create unique id. in fillable the column name "s_code" has to be written
        // static::creating(function ($student) {
        //     $student->s_code = 'st' . uniqid();
        // });
    }

}
