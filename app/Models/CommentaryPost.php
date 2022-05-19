<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaryPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'comment'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
