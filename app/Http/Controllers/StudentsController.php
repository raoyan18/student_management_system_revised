<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Http\Controllers\RemarksController;
use App\Remarks;
use App\Http\Controllers\NotificationController;
use App\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $student = Students::where("student_user_id_fkey",$id)->get();
        $notice = (new NotificationController)->latestNotice();
        $remarks = (new RemarksController)->lastRemarks();
        return view('dashboard part-student.dashboard', compact('student','notice','remarks'));
    }
    public function studentInfo()
    {
        $id = Auth::user()->id;
        $student = Students::where("student_user_id_fkey",$id)->get();
        return $student;
    }

    public function create()
    {
        //Validation for repeat entry of student table
        $id = Auth::user()->id;
        $student = (new StudentsController)->studentInfo();
        $count = count($student);
        if($count==0) {
            $obj = new Students();
            $obj->student_name = Auth::user()->name;
            $obj->student_user_id_fkey = $id;
            $obj->student_email = Auth::user()->email;
            $result = $obj->save();
            if ($result) {
                $message = "Please complete your profile to be approved!!";
                return view('dashboard part-student.dashboard',compact('student'));
            }
        }

        else
            return $message="ERROR message";

    }

    public function completeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $checkBox = implode(',', $request->input('student_adviser_supervisor'));
        $name = $_FILES['student_photo']['name'];
        $name_ext = explode('.',$name);
        $ext = last($name_ext);
        $target_name = uniqid(rand()).'.'.$ext;
        $target_file = "StudentPhoto/".$target_name;

        $source= $_FILES['student_photo']['tmp_name'];
        @mkdir("StudentPhoto");
        $destination=$target_file;
        move_uploaded_file($source,$destination);
        $status = Students::where('student_user_id_fkey', $id)
            ->update([
                'student_name' => $request->input('student_name'),
                'student_email' => $request->input('student_email'),
                'student_photo' => $target_file,
                'student_cell' => $request->input('student_cell'),
                'student_roll' => $request->input('student_roll'),
                'student_adviser_supervisor' => $checkBox,
                'student_guardian_name' => $request->input('student_guardian_name'),
                'student_guardian_email' => $request->input('student_guardian_email'),
                'student_guardian_cell' => $request->input('student_guardian_cell'),
                'student_present_address' => $request->input('student_present_address'),
                'student_permanent_address' => $request->input('student_permanent_address'),
                'student_achievement' => $request->input('student_achievement')

            ]);



        if($status)
            return redirect('dashboard')->with('status', 'Your profile will be verified and approved by the Admin!');
        else
            return redirect('yourProfile')->with('failed', 'Sorry there was a problem!!!');

    }
}
