<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Statistik_Controller extends Controller
{
    public function statistik(){
        return view('admin.statistik');
    }
}

