<?php

namespace App\Http\Controllers;

use App\Homeinfo;
use Illuminate\Http\Request;

class HomeInfoController extends Controller
{
    public function index(){
        return view('dashboard part-admin.homepage_info');

    }

    public function store(Request $request){
        $data=$request->all();
        $adminProfile=Homeinfo::find(1);

        $image2 = $request->file('home_image_2')->getClientOriginalName();
        $image1 = $request->file('home_image_1')->getClientOriginalName();

        $request->home_image_1->move(public_path('uploaded'),$image1);
        $request->home_image_2->move(public_path('uploaded'),$image2);

        if($adminProfile){
            $data['home_image_1'] = $image1;
            $data['home_image_2'] = $image2;
            $adminProfile->update($data);
        }
        else{
            Homeinfo::create($data);
        }

        return view('dashboard part-admin.homepage_info');
    }
}
