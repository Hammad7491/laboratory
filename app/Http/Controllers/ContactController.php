<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        try {
            // Important: from() should be your own domain email, not the user email
            Mail::send('emails.contact', $data, function ($message) use ($request) {
                $message->to('info@emmagenix.com')
                    ->subject('New Appointment Request from EmmaGenix Website')
                    ->from('info@emmagenix.com', 'EmmaGenix Contact Form')
                    ->replyTo($request->email, $request->first_name . ' ' . $request->last_name);
            });

            return response()->json(['status' => 'success']);
        } catch (\Throwable $e) {
            // Log so you can see the real error in storage/logs/laravel.log
            Log::error('Contact form mail error', [
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'status'  => 'error',
                'message' => 'Mail send failed on the server.',
            ], 500);
        }
    }
}
