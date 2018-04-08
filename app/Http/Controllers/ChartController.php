<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Charts;

class ChartController extends Controller
{

    public function interface_init()
    {
        return view('chart');
    }

}
