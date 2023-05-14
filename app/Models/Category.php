<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$extension;
        self::$directory = 'category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function createCategory($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }

    public function works_post()
    {
        return $this->hasMany(WorksPost::class);
    }

}
