<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage()
    {
        $this->validate(request(), ['email' => 'required', 'message' => 'required']);

        Mail::to('sales@mymsolutions.co.za')->send(new ContactMessage(request()->only('name', 'email', 'message')));
    }
}
