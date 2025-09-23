<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function dashboard(){
        return view('students.dashboard');
    }

    public function certificate(){
        return view('students.certificate');
    }

    public function courseCatalogue(){
        return view('students.course-catalogue');
    }

    public function courseContainer(){
        return view('students.courseContainer');
    }

    public function courseContent(){
        return view('students.Course-Content');
    }

    public function edit(){
        return view('students.edit');
    }

    public function exercices(){
        return view('students.exercices');
    }

    public function favoris(){
        return view('students.favoris');
    }
    
    public function certificationsContent(){
        return view('students.certificationsContainer');
    }
    public function ressources(){
        return view('students.studentRessource');
    }
}
