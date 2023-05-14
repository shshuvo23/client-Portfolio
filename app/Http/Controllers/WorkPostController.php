<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WorksPost;
use Illuminate\Http\Request;

class WorkPostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.post.addPost', [
            'categories' => $categories,
        ]);
    }

    public function create(Request $request)
    {
        WorksPost::addPost($request);
        return redirect('/post');
    }
}
