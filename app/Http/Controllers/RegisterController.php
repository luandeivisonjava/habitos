<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->input('password')
        ]);
        Auth::login($user);

        return redirect('/dashboard');
    }
}
