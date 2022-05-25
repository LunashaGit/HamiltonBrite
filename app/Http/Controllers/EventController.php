<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function create()
    {
        return view('event.create',[
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'category_id' => 'required',
            'title' => 'required|min:8|max:50',
            'excerpt' => 'required|max:50',
            'body' => 'required|max:500',
            'date' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = $attributes['title'];

        $attributes['slug'] = str_replace(" ", "-", $attributes['slug']);

        Post::create($attributes);

        Mail::to(session()->get('email'))
            ->cc(session()->get('email'))
            ->bcc(session()->get('email'))
            ->send(new EmailVerification());

        return redirect('/')->with('success', 'Your Event has been created.');
    }

    public function redirection()
    {
        return redirect('/login')->with('error', 'You need to login !');
    }
}
