<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $name = $user ? $user->nama : null;

        return view('homepageuser', ['nama' => $name]);
    }
}