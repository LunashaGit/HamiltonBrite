<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username'=> 'required|unique:users,username|max:255|min:3', // [Rule::unique('users','username')]
            'email' => 'required|unique:users,email|email|max:255',
            'password' => 'required_with:password_confirm|same:password_confirm|min:8|max:255',
            'password_confirm' => 'min:8|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        Mail::to($attributes['email'])
            ->cc($attributes['email'])
            ->bcc($attributes['email'])
            ->send(new EmailVerification());
        return redirect('/')->with('Success', 'Your account has been created, welcome to Hamilton Brite !');
    }

}
