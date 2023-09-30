<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // View Home
    public function index() {
        return view('home');
    }
}
