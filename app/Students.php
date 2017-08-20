<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    protected $fillable = [
        'student_id', 'student_roll','student_email','student_photo','student_user_id_fkey','student_adviser_supervisor','student_cell',
        'student_guardian_name','student_guardian_cell','student_guardian_email','student_present_address','student_permanent_address',
        'student_achievement','student_approved',
    ];
}
