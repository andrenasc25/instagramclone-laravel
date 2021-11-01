<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Public Pages
     */
    public function signup()
    {
        return view('pages.public.signup');
    }

    public function auth()
    {
        return view('pages.public.auth');
    }

    /**
     * User Pages
     */
    public function home()
    {
        return view('pages.user.home');
    }
}
