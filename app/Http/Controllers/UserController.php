<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function registrarse() {
        return view('registrarse');
    }

    public function store(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'min:10', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:10']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'Usario creado correctamente');
    }
}
