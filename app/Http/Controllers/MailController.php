<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'title' => 'Mail from VSCODE',
            'body' => 'This message to test whether my message sent or not',  
        ]; 
        Mail::to("suindikova.is06@gmail.com")->send(new TestMail($details)) ;
        return "email sent";
    }
}
