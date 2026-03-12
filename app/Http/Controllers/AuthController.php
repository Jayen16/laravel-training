<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\LoginAuthRequest;
=======
use App\Http\Requests\Auth\LoginAuthRequest;
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
<<<<<<< HEAD

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
=======
    public function show() {
        return view('auth.show');
    }

    public function login(LoginAuthRequest $request) {
        $credentials = $request->safe(['name', 'password']);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('games.index');
        }

        return back()->withErrors([
            'name' => 'The email and password does not match.',
        ])->onlyInput('name');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
    }
}
