<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProImage extends Model
{
    use HasFactory;

    private static $proImage, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        // dd(self::$image);
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.'. self::$proImage->name. '.' . self::$extension;
        self::$directory = 'profile-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function addProImage($request)
    {
        self::$proImage = new ProImage();
        self::$proImage->image = self::getImageUrl($request);
        self::$proImage->save();

    }
}
