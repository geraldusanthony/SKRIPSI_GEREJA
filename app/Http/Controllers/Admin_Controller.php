<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;

class Admin_Controller extends Controller
{
    public function homeadmin(){
        $user = auth()->user();
        $umat = umat::get();
        return view('admin.home', compact('user','umat'));
    }

    public function login(){
        return view('admin.loginpage');
    }

    public function loginpage(){
        return view('admin.loginpage');
    }

}
