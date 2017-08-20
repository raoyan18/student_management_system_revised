<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable =['notification_title','notification_details','notification_reciever'];
}
