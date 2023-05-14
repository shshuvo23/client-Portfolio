<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideImage extends Model
{
    use HasFactory;

    private static $sliderImage, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        // dd(self::$image);
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.'. self::$sliderImage->name. '.' . self::$extension;
        self::$directory = 'slider-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function addSliderImage($request)
    {
        self::$sliderImage = new SlideImage();
        self::$sliderImage->image = self::getImageUrl($request);
        self::$sliderImage->save();

    }
}
