<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeinfo extends Model
{
    protected $fillable=['home_about','home_words','home_project','home_advise','home_image_1','home_image_2'];
}
