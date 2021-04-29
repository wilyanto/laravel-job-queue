<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new SendEmailJob());
        echo 'email sent';
    }
}