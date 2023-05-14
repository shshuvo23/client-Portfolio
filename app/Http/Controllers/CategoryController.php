<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.add-category');
    }

    public function addCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect('/category');
    }
}
