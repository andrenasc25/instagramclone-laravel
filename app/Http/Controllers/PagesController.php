<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.public.home');
    }

    public function signup()
    {
        return view('pages.public.signup');
    }
}
