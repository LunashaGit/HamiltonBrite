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
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
            'categories' => Category::all()
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

    public function change(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->date_start = $request->date_start;
        $post->date_end = $request->date_end;
        $post->start_hour = $request->start_hour;
        $post->end_hour = $request->end_hour;
        $post->slug = $post->title;
        $post->slug = str_replace(" ", "-", $post->slug);
        $post->save();

        return $this->redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return $this->redirect('/')->with('Success', 'Your post has been deleted');
    }


}
