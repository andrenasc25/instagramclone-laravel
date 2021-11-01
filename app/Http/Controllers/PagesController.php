<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signup()
    {
        return view('pages.public.signup');
    }
}
