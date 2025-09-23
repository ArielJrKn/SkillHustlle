<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamePageController extends Controller
{
    public function feedback()
    {
        return view('commun.feedback');
    }

    public function revenus()
    {
        return view('commun.revenus');
    }

    public function social()
    {
        return view('commun.social');
    }

    public function userProfilDetail()
    {
        return view('commun.userProfileDetail');
    }
}
