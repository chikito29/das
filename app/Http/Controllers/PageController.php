<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('na.authenticate')->except('showWelcome');
    }

    public function showWelcome() {
        return view('welcome');
    }

    public function showHome() {
        return view('pages.home');
    }
}
