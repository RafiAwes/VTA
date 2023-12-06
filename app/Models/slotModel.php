<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slotModel extends Model
{
    use HasFactory;

    protected $fillable = ['batch_name','total_classes','starting_date','numberOfStudents','class_time','days'];
}
