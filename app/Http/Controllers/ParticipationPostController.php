<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationParticipation;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ParticipationPostController extends Controller
{
    public function store(Post $post)
    {
        $post->participation()->create([
            'user_id' => request()->user()->id,
        ]);

        Mail::to(request()->user()->email)
            ->cc(request()->user()->email)
            ->bcc(request()->user()->email)
            ->send(new ConfirmationParticipation());

        return back();
    }
}
