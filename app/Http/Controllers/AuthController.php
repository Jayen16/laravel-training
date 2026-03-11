<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAuthRequest;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function show()
    {
        return view('auth.show');
    }
    public function login(LoginAuthRequest $request)
    {
        $credentials = $request->safe([
            'email',
            'password'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('games.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('login.index'));
    }
}
