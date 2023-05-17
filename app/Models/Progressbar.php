<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progressbar extends Model
{
    use HasFactory;

    private static $progressBar;

    public static function addData($request)
    {
        self::$progressBar = new Progressbar();
        self::$progressBar->name = $request->name;
        self::$progressBar->percent_complete = $request->percent_complete;
        self::$progressBar->save();
    }

    public static function deleteProgressbar($id)
    {
        self::$progressBar = Progressbar::find($id);
        self::$progressBar->delete();
    }
}
