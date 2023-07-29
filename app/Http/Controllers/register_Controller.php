<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class register_Controller extends Controller
{
    public function registerLay(){
        return view('layout.register');
    }
}
