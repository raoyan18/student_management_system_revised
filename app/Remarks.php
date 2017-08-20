<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remarks extends Model
{
    protected $fillable = [
        'remarks_id', 'remarks_title','remarks_description', 'remarks_date', 'remarks_user_id_fkey',
    ];
}
