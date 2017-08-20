<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Http\Controllers\StudentsController;
use App\Students;
use Illuminate\Support\Facades\Auth;


class NotificationController extends Controller
{
    public function store(Request $request){
        $data=$request->all();
        $notice= Notification::create($data);
        return view('dashboard part-admin.send_notice');
    }

    // Return recent notices for dashboard..
    public function latestNotice()
    {
        $id = Auth::user()->id;
        $available = Students::where("student_user_id_fkey",$id)->first();
        $available['student_adviser_supervisor'];
        if($available['student_adviser_supervisor'] == 'Adviser')
            $des = "advise";
        else if($available['student_adviser_supervisor'] == 'Supervisor')
            $des = "project";
        $notice = Notification::where('notification_reciever','=',$des)
            ->orWhere('notification_reciever','=','both')
            ->orderBy('id','desc')->take(6)
            ->get();
        return $notice;
    }

    public function allNotices()
    {
        $id = Auth::user()->id;
        $student = (new StudentsController)->studentInfo();
        $available = Students::where("student_user_id_fkey",$id)->first();
        $available['student_adviser_supervisor'];
        if($available['student_adviser_supervisor'] == 'Adviser')
            $des = "advise";
        else if($available['student_adviser_supervisor'] == 'Supervisor')
            $des = "project";
        $data = Notification::where('notification_reciever','=',$des)
            ->orWhere('notification_reciever','=','both')
            ->orderBy('id','desc')
            ->get();

        return view('dashboard part-student.notices',compact('data','student'));


    }
}
