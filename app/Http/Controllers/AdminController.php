<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function certif()
    {
        return view('admin.certif');
    }

    public function course()
    {
        return view('admin.cours');
    }

    public function courseDetail()
    {
        return view('admin.courseDetail');
    }

    public function courseContent()
    {
        return view('admin.mesCours');
    }

    public function courseEdit()
    {
        return view('admin.createCourse');
    }

    public function courseCreate()
    {
        return view('admin.createCourse');
    }

    public function gestionUser()
    {
        return view('admin.gestionUsers');
    }

    public function jobs()
    {
        return view('admin.offres');
    }

    public function jobsDetail()
    {
        return view('admin.offerDetail');
    }

    public function usersDetail()
    {
        return view('admin.userDetail');
    }

    public function autres()
    {
        return view('admin.autres');
    }

    public function revenus()
    {
        return view('admin.revenus');
    }

    public function feedback()
    {
        return view('admin.feedback');
    }
}
