<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AppController extends Controller
{
   public function getregistration($course_id)
    {
     //  $course_id= Input::get();
        return view('index')->with('course_id',$course_id);
       //  return view('index');
    }

    
    
    public function postRegistration(Request $request)
    {
        $user = new User();         
        $user->name = $request->Input(['name']);
        $user->f_name=$request->Input(['f_name']);
        $user->phone_no=$request->Input(['phone_no']);
        $user->address=$request->Input(['address']);
        $user->email=$request->Input('email');
        $user->course_id=$request->Input('course_id');
        $user->branch_id=$request->Input('branch_id');
        $user->date_of_birth =$request->Input('dob');       
        $user->save();
        
        return redirect('success');
    }
    
    public function success()
    {
        return view('successful');
    }


}
