<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'need'       => 'required',
            'comment'    => 'nullable',
        ]);

        $data = [
            'name'    => $request->first_name . ' ' . $request->last_name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'need'    => $request->need,
            'comment' => $request->comment,
        ];

        // SEND EMAIL TO YOUR BUSINESS EMAIL
        Mail::send('emails.contact', $data, function ($message) use ($request) {
            $message->to('info@emmagenix.com')
                    ->subject('New Appointment Request from EmmaGenix Website')
                    ->from($request->email, $request->first_name . ' ' . $request->last_name);
        });

        return response()->json(['status' => 'success']);
    }
}
