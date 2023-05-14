<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorksPost extends Model
{
    use HasFactory;

    private static $workPost, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        // dd(self::$image);
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.'. self::$workPost->name. '.' . self::$extension;
        self::$directory = 'work-post-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function addPost($request)
    {
        self::$workPost = new WorksPost();
        self::$workPost->category_id = $request->category_id;
        self::$workPost->image = self::getImageUrl($request);
        self::$workPost->save();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
