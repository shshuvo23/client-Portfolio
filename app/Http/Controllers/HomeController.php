<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\ProImage;
use App\Models\SlideImage;
use App\Models\WorksPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $postsQuery = WorksPost::query();


        if ($request->has('fl_radio')) {
            if ($request->fl_radio == 'box-item') {
                // show all products
            } else {
                $categoryId = str_replace('f-', '', $request->fl_radio);
                $postsQuery->where('category_id', $categoryId);
            }
        }

        $lastImage = ProImage::latest()->first();
        $lastSlide = SlideImage::latest()->first();
        $categories = Category::orderBy('id', 'desc')->take(6)->get();
        $posts = $postsQuery->orderBy('id', 'desc')->take(8)->get();
        $clients = Client::all();
        return view('website.home.index', [
            'lastImage' => $lastImage,
            'lastSlide' => $lastSlide,
            'categories' => $categories,
            'posts' => $posts,
            'clients' => $clients,
        ]);
    }

    public function showPostByCategory($id)
    {
        $category = Category::find($id);
        $posts = WorksPost::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.category.showPostByCategory',[
            'category' => $category,
            'posts' => $posts,
        ]);
    }

    public function allCategory()
    {
        return view('website.category.allCategory',['categories' => Category::all()]);
    }
    public function service()
    {
        return view('website.home.service');
    }
}
