<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remarks;
use App\Http\Controllers\StudentsController;
use App\Students;
use Illuminate\Support\Facades\Auth;

class RemarksController extends Controller
{
    public function newRemarks(){
        $student = (new StudentsController)->studentInfo();
        return view('dashboard part-student.save_remark',compact('student'));

    }

    //Return last remarks for dashboard
    public function lastRemarks()
    {
        $id = Auth::user()->id;
        $remarks = Remarks::where('remarks_user_id_fkey','=',$id)
            ->orderBy('remarks_id','desc')->take(1)
            ->get();
        return $remarks;
    }

    public function store(Request $request){
        $data=$request->all();
        $status= Remarks::create($data);
        if($status)
            return redirect('newRemarks')->with('status', 'New Remarks is added!!');
        else
            return redirect('newRemarks')->with('failed', 'Sorry there was a problem!!!');
    }

    public function allRemarks(){
        $id = Auth::user()->id;
        $student = (new StudentsController)->studentInfo();
        $data = Remarks::where('remarks_user_id_fkey','=',$id)
            ->orderBy('remarks_id','desc')
            ->get();
        return view('dashboard part-student.remarks',compact('data','student'));
    }
}
