<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Notification extends Controller
{
    public function store(Request $request){
        $data=$request->all();
        $notice=\App\Notification::create($data);
        return view('dashboard part-admin.send_notice');
    }
}
