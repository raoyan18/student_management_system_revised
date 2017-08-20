<?php

namespace App\Http\Controllers;

use App\link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
       return view('dashboard part-admin.add_links');

    }
    public function store(Request $request){
        //getting all the data from form
        $data=$request->all();

        //find if any data exists in id=1
        $links=link::find(1);

        //if exists, then update
        if($links){
            $links->update($request->all());
        }

        //else create
        else{
            link::create($data);
        }
        return view('dashboard part-admin.add_links');
    }
}
