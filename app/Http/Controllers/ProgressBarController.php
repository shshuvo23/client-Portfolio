<?php

namespace App\Http\Controllers;

use App\Models\Progressbar;
use Illuminate\Http\Request;

class ProgressBarController extends Controller
{
    public function index()
    {
        return view('admin.progressbar.progressInfo');
    }

    public function create(Request $request)
    {
        Progressbar::addData($request);
        return redirect('/progress-bar/list');
    }

    public function store()
    {
        return view('admin.progressbar.progressList',['progress' => Progressbar::orderBy('id', 'desc')->get()]);
    }

    public function delete($id)
    {
        Progressbar::deleteProgressbar($id);
        return redirect('/progress-bar/list');
    }
}
