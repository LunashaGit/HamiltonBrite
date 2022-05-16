<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class FirstPostCommentary extends Model
{
    use HasFactory;

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function allPosts()
    {
        return collect(File::files(resource_path("posts/")))
            ->map(fn($file) => \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new AncientPost(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ))
            ->sortByDesc('date');
    }

    public static function find($slug)
    {
       return static::allPosts()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);

        if(!$post){
            throw new ModelNotFoundException();
        }

        return static::find($slug);

    }
}
