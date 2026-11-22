<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'email.required' => 'E-mail é obrigatório',
            'email.email' => 'Preencha com um e-mail válido',
            'password.required' => 'Senha é obrigatória'
        ];

        $request->validate($rules, $messages);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)
            ->where('deleted_at', null)
            ->first();

        if (!$user) {
            return redirect('/login')
                ->withInput()
                ->with('loginError', 'E-mail ou senha inválidos');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'E-mail ou senha inválidos');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'username' => $user->username,
            ]
        ]);

        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser(Request $request)
    {
        $rules = [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];

        $messages = [
            'username.required' => 'Campo obrigatório',
            'email.required' => 'Campo obrigatório.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'password.required' => 'Campo obrigatório.',
            'confirm_password.required' => 'Campo obrigatório.',
            'confirm_password.same' => 'As senhas não se coincidem.'
        ];

        $request->validate($rules, $messages);

        User::query()->create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT)
        ]);

        return redirect('/login');
    }

    public function logout(): RedirectResponse
    {
        session()->forget('user');

        return redirect('/');
    }
}
