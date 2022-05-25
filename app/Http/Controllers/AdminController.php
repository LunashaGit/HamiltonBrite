<?php

namespace App\Http\Controllers;

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
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)
        ]);
    }

    public function adminView()
    {
        return view('admin.view');
    }
}
