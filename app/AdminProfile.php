<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $fillable=['admin_name','admin_password','admin_email','iadmin_cell','admin_designation','admin_institution','admin_propic',''];
}
