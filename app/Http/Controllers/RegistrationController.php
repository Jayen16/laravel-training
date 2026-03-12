<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\SaveRegistrationRequest;
=======
use App\Http\Requests\Registration\SaveRegistrationRequest;
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('registration.show');
    }
<<<<<<< HEAD
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
=======

    public function save(SaveRegistrationRequest $request)
    {
        $data = $request->safe(['name', 'email', 'password']);
        User::create($data);
        return redirect()->route('registration.show')->with('success',true);
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
    }
}
