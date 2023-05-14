<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientLogoController extends Controller
{
    public function index()
    {
        return view('admin.client.logoadd');
    }

    public function create(Request $request)
    {
        Client::addClientLogo($request);
        return redirect('/Client');
    }
}
