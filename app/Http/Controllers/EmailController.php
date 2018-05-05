<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
  public function getSend(Request $request)
  {
    $title = 'Notice title';
    $content = 'Notice body';

    Mail::send('users.email.send', ['title' => $title, 'content' => $content], function ($message)
    {

      $message->subject('Mailgun and Laravel are awesome!');
  		$message->from('no-reply@masenoboards.com', 'Masenoboards');
  		$message->to('dennismayeku@gmail.com');

    });

    return response()->json(['message' => 'Request completed']);
  }
}
