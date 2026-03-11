<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('registration.show');
    }
    public function save(SaveRegistrationRequest $request)
    {

        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Logic for storing registration data
        return redirect()->route('registration.show')->with('success', 'Registration successful! You can now log in.');
    }
}
