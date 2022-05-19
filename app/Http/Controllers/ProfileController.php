<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $attributes = $request->session()->get('username');
        return view('profile', [
            'profile' => $attributes
        ]);
    }
}
