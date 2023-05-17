<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\WorksPost;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $postCount = WorksPost::count();
        $clientCount = Client::count();
        return view('admin.home.index', [
            'userCount' => $userCount,
            'postCount' => $postCount,
            'clientCount' => $clientCount,
        ]);
    }
}
