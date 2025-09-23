<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function dashboard (){
        return view('teacher.dashboard');
    }

    public function courseEdit(){
        return view('teacher.createCourse');
    }

    public function certif (){
        return view('teacher.certif');
    }

    public function courseDetail (){
        return view('teacher.courseDetail');
        
    }

    public function createCourse (){
        return view('teacher.createCourse');
        
    }

    public function course (){
        return view('teacher.mesCours');
        
    }

    public function students (){
        return view('teacher.myStudent');
        
    }

    public function setting (){
        return view('teacher.setting');
        
    }

    public function usersDetail(){
        return view('teacher.userDetail');
        
    }

}
