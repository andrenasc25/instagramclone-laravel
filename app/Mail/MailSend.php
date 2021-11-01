<?php

namespace App\Mail;

use App\Mail\MailBuilder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class MailSend implements MailContract
{
    public function __construct()
    {
        
    }

    public function send($toAddress, $message, $subject)
    {
        $fromAddress = 'guerreiroandre25@gmail.com';
        $name = 'Andre';

        $data = [
            'fromAddress' => $fromAddress,
            'subject' => $subject,
            'name' => $name,
            'message' => $message
        ];

        Mail::to($toAddress)->send(new MailBuilder($data));
    }

    public function getPasswordRecoverLink()
    {
        $email = request()->recoverEmail;
        $url = URL::temporarySignedRoute(
            'recoverPage', now()->addMinutes(30), ['mail' => $email]
        );
        $this->send($email, $url, 'Link for password recovery');

        DB::table('users')->where('user_email', $email)->update(['remember_token'=> $url]);
        DB::table('users')->where('user_email', $email)->update(['remember_token_expires_at' => date('Y-m-d H:i:s', (time() + (30 * 60)))]);
        return 'Link para recuperação de senha enviado para o email';
    }

    public function recoverMail()
    {
        return 'ok';
    }
}