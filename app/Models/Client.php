<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    private static $client, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        // dd(self::$image);
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.'. self::$client->name. '.' . self::$extension;
        self::$directory = 'client-logo/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function addClientLogo($request)
    {
        self::$client = new Client();
        self::$client->image = self::getImageUrl($request);
        self::$client->save();

    }
}
