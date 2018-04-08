<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function interface_init() {
        return view('home');
    }

    public function map_init() {
        return view('map');
    }

    public function ops_init() {
        return view('ops');
    }
}
