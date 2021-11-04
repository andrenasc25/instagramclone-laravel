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

    public function profileOther(Request $request)
    {
        return view('pages.public.profileOther',[
            'routename' => $request->username
        ]);
    }

    /**
     * User Pages
     */
    public function home()
    {
        return view('pages.user.home');
    }

    public function profile()
    {
        return view('pages.user.profile');
    }

    public function chat()
    {
        return view('pages.user.chat');
    }

    public function explore()
    {
        return view('pages.user.explore');
    }

    public function config()
    {
        return view('pages.user.config');
    }

    public function newPost()
    {
        return view('pages.user.newPost');
    }
}
