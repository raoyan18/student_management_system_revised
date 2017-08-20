<?php

namespace App\Http\Controllers;

use App\link;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $link_data=link::all();
        return view('index',compact('link_data'));
    }
}
