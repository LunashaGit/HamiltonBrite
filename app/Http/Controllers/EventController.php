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

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'title' => 'required|min:8|max:50',
            'category_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'excerpt' => 'required|max:50',
            'body' => 'required|max:500',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'required'
        ]);
        $file = $request->file('image');
        $imageName = time().'.'.$request->image->extension();
        $attributes['image'] = $imageName;
        $file->storeAs('public/images', $imageName);
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
