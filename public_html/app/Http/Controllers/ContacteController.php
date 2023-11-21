<?php

namespace App\Http\Controllers;

use App\Mail\ContacteMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContacteController extends Controller
{
    public function index()
    {
        return view('contacte.index');
    }

    public function store(Request $request)
    {
        // validacio del formulari
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'missatge' => 'required',
            'privacy_policy' => 'accepted'
        ], [
            'privacy_policy.accepted' => 'Has de marcar la casella de la Política de Privacitat.'
        ]);

        // verificació de reCAPTCHA
        $secretKey = env('RECAPTCHA_SECRET_KEY');
       
        $token = $request->input('recaptcha_token');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $token,
        ]);

        $result = json_decode($response->body(), true);

        // comprobar conexió recaptcha al backend
        // dd($result);

        if (!$result['success'] || $result['score'] < 0.5) {
            // controlar resposta en cas de bot o acció invalida
            return back()->withErrors(['captcha' => 'Error de verificació de reCAPTCHA.']);
        }

        // procesar el formulari i enviar el correu
        Mail::to('info@2dev4u.com')->send(new ContacteMailable($request->all()));
        session()->flash('info', 'Missatge enviat correctament!');

        return redirect()->route('contacte.index');
    }
}