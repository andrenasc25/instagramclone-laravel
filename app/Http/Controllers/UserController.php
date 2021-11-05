<?php

namespace App\Http\Controllers;

use App\FileManager\PublicDirectory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function addPost(Request $request)
    {
        //Upload the image or the video into the temporaryPosts folder
        $newFileName = base64_encode(Auth::user()->email . 'temporary' . date('Y-m-d H:i:s')) . '.jpg';
        $publicDirectory = new PublicDirectory('temporaryPosts/', $newFileName);
        $publicDirectory->upload($request->postAdd);

        //Create signed route url to allow using the upload page
        $url = URL::temporarySignedRoute(
            'newPost', now()->addMinutes(30), ['imageName' => $newFileName]
        );

        $urlParts = explode('?', $url);

        //Return signed route url
        return $url;
    }

    public function publishPost(Request $request)
    {
        //Retrieve data from the user
        $postDescription = $request->postDescription;
        $postContentUrl = $request->imageUrl;
        $postUserId = Auth::user()->id;

        //Detect type of file
        $fileExtension = substr($postContentUrl, -4);
        $fileType = '';
        if($fileExtension == '.jpg' || $fileExtension == '.png')
            $fileType = 1;
        else if($fileExtension == '.mp4')
            $fileType = 2;
        else
            return 'Adicione uma imagem ou um texto';

        //Insert new post
        $data = Post::create([
            'user_id' => $postUserId,
            'text' => $postDescription
        ]);

        DB::insert('insert into users_posts_media
            (user_post_id, url, media_type)
            values(?,?,?)',
            [$data->id, $postContentUrl, $fileType]
        );

        //Make new directory for user's posts
        $publicDirectory = new PublicDirectory('/users/' . Auth::user()->email);
        $publicDirectory->mkdir();

        //Move file from temporaryPosts to the user's posts folder
        File::move(public_path('temporaryPosts/' . $postContentUrl), public_path('users/' . Auth::user()->email . '/' . $postContentUrl));

        //Remove file from temporaryPosts folder
        File::delete(public_path('temporaryPosts/' . $postContentUrl));

        return 'Postagem feita com sucesso';
    }

    public function addFriend(Request $request)
    {
        //Get new friend's user's id
        $followedUserId = User::where('username', $request->newFriend)
                        ->value('id');
        
        //Add new friend
        DB::insert('insert into users_follows
            (user_id, followed_user_id)
            values (?,?)',
            [Auth::user()->id, $followedUserId]
        );

        return 'Friend added successfully';
    }
}
