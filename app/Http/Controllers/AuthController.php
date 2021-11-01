<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Get data from the user
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        //Insert new user in users table
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        //If the data is inserted successfully, create a temporary link to be sent via email
        $url = URL::temporarySignedRoute(
            'activateLink', now()->addMinutes(30), ['mail' => $mail]
        );

        //Send the created link to the user's email
        $mailSend = new MailSend();
        $mailSend->send($email, $url, 'Confirmação de email');

        return 'Email de confirmação enviado para o email: ' . $email;
    }
}
