<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
    	$data['email'] = $request->input('email');
    	$data['content'] = $request->input('content');
    	Mail::send('emails.contoh', $data, function($message) use ($data)
    	{
    		$message->to($data['email']);
    		$message->subject('Coba Coba');
    	});

    	return back();
    }
}
