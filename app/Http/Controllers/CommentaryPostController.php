<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\CommentaryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentaryPostController extends Controller
{
    public function store(Post $post)
    {
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'comment' => request('comment')
        ]);

        Mail::to(request()->user()->email)
            ->cc(request()->user()->email)
            ->bcc(request()->user()->email)
            ->send(new EmailVerification());

        return redirect('/')->with('success', 'Your commentary has been created.');
    }
}
