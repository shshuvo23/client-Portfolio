<?php

namespace App\Http\Controllers;

use App\Models\SlideImage;
use Illuminate\Http\Request;

class SliderImageController extends Controller
{
    public function index()
    {
        return view('admin.slider-image.addImage');
    }

    public function sliderImageAdd(Request $request)
    {
        SlideImage::addSliderImage($request);
        return redirect('/add-slider-image')->with('message', 'Slider Uploaded Successfully');
    }
}
