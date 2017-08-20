<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    protected $fillable=['link_facebook','link_twitter','link_google_plus','link_linkedin','link_youtube'];
}
