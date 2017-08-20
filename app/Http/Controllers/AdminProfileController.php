<?php

namespace App\Http\Controllers;

use App\AdminProfile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{

    public function index(){
        return view('dashboard part-admin.edit_profile');
    }
    public function store(Request $request){

        $data=$request->all();
        $adminProfile=AdminProfile::find(1);

        $image = $request->file('admin_propic')->getClientOriginalName();

        $request->admin_propic->move(public_path('uploaded'),$image);

        $request->admin_propic = $image;
        if($adminProfile){
            $data['admin_propic'] = $image;
            $adminProfile->update($data);
        }
        else{
            AdminProfile::create($data);
        }

         return view('dashboard part-admin.edit_profile');
    }
}
