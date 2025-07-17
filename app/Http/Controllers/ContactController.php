<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validacija unosa
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Slanje jednostavnog plain text emaila
        Mail::raw("Poruka od: {$data['name']} ({$data['email']}):\n\n{$data['message']}", function ($message) use ($data) {
            $message->to('focus@example.com') // Zameni sa stvarnim mailtrap emailom
                    ->subject('Nova poruka sa Focus Headshots sajta');
        });

        // Vraćanje nazad sa porukom o uspehu
        return back()->with('success', 'Poruka je uspešno poslata!');
    }
}
