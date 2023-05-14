<?php

namespace App\Http\Controllers;

use App\Models\ProImage;
use Illuminate\Http\Request;

class ProImgController extends Controller
{
    public function index()
    {
        return view('admin.profile-image.addImage');
    }

    public function profileImageAdd(Request $request)
    {
        ProImage::addProImage($request);
        return redirect('/add-image')->with('message', 'Slider Uploaded Successfully');
    }
}
