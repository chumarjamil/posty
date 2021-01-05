<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // check if logged in or not dd(auth()->user());
        // dd(auth()->user()->posts);
        return view('posts.dashboard');
    }
}
