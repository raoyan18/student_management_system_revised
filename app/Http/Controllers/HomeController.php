<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentsController;
use App\Students;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation = Auth::user()->designation;
        if($designation=='student')
            redirect('/dashboard');
        else
            redirect('/admin-dashboard');
    }
    /**
    Completing  Student's profile
     */
    public function yourProfile()
    {
        $designation = Auth::user()->designation;
        $student = (new StudentsController)->studentInfo();
        if($designation=='student'){
            $result = (new StudentsController)->create();
            if($result)
                $student = (new StudentsController)->studentInfo();
                return view('dashboard part-student.admin',compact('student'));
        }
        else
            return view('home');
    }
}