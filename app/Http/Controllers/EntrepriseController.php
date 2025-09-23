<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function dashboard(){
        return view('entreprise.dashboard');
    }

    public function candidates(){
        return view('entreprise.candidates');
    }

    public function createJob(){
        return view('entreprise.createJob');
    }

    public function jobs(){
        return view('entreprise.jobs');
    }

    public function jobsDetail(){
        return view('entreprise.jobsDetail');
    }

    public function edit(){
        return view('entreprise.edit');
    }

    public function jobsEdit(){
        return view('entreprise.createJob');
    }
}
