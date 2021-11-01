<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'activateLink', now()->addMinutes(30), ['mail' => $email]
        );

        //Send the created link to the user's email
        $mailSend = new MailSend();
        $mailSend->send($email, $url, 'Confirmação de email');

        return 'Email de confirmação enviado para o email: ' . $email;
    }

    public function login(Request $request)
    {
        //Get data from the user
        $email = $request->email;
        $password = $request->password;

        //Validating credentials by existing and their types
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //Attempt to login
        if(Auth::attempt(['email' => $email, 'password' => $password, 'user_status' => 0])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        //Error if credentials are incorrect
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function verifyMail(Request $request)
    {
        User::where('email', $request->mail)
            ->update([
                'email_verified_at' => date('Y-m-d H:i:s'),
                'user_status' => 0
            ]);

        return 'Email verificado com sucesso';
    }
}
