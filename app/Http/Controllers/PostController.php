<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CommentaryPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)
        ]);
    }

    public function show(Post $post, CommentaryPost $commentaryPost)
    {
        return view('post', [
            'post' => $post,
            'commentaryPost' => $commentaryPost
        ]);
    }

    public function getPostsByCategories(Category $category)
    {
            return view('posts', [
                'posts' => $category->posts,
            'currentCategory' => $category,
            'categories' => Category::all()
        ]);
    }

    public function getPostsByAuthor(User $author)
    {
        return view('posts', [
            'posts' => $author->posts,
            'categories' => Category::all()
        ]);
    }

    public function redirect()
    {
        return redirect('/');
    }
}
