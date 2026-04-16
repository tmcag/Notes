<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function logout()
    {
        // Clear user from cookie session
        session()->forget('user');

        return view('Login');
    }

    public function auth(Request $request)
    {
        $AUTH_ERROR_MESSAGE = 'Email e/ou senha inválidos.';

        // Validate Auth Fields
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            // Error Messages
            [
                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'O campo email deve ser um endereço de email válido.',
                'password.required' => 'O campo senha é obrigatório.'
            ]
        );

        // If Validation Passes, get the fields
        $email = $request->input('email');
        $password = $request->input('password');

        // Check If user exists
        $user = User::where('email', $email)->where('deleted_at', null)->first();

        if (!$user) return redirect()->back()->with('authError', $AUTH_ERROR_MESSAGE);

        // Check if password is correct
        if (!password_verify($password, $user->password)) return redirect()->back()->with('authError', $AUTH_ERROR_MESSAGE);

        User::where('id', $user->id)->update(['last_login' => now()]);

        // Create Session
        session([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]
        ]);

        return redirect('/');
    }
}
