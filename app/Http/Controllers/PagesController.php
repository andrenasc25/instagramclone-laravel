<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        //Get followed's posts
        $posts = DB::table('users_posts')
                    ->join('users', 'users_posts.user_id', '=', 'users.id')
                    ->join('users_posts_media', 'users_posts_media.user_post_id', '=', 'users_posts.id')
                    ->get(['username', 'text', 'url', 'user_id', 'email']);

        return view('pages.user.home', [
            'posts' => $posts
        ]);
    }

    public function profile()
    {
        //Get user's posts
        $userPosts = User::where('users.id', Auth::user()->id)
                        ->join('users_posts', 'user_id', '=', 'users.id')
                        ->join('users_posts_media', 'users_posts_media.user_post_id', '=', 'users_posts.id')
                        ->get();

        return view('pages.user.profile',[
            'userPosts' => $userPosts
        ]);
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
