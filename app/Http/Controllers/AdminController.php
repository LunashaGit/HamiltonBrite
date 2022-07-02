<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.view', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
            'categories' => Category::all()
        ]);
    }

    public function adminView()
    {
        return view('admin.view', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
            'categories' => Category::all()
        ]);
    }
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return back();
    }
}
