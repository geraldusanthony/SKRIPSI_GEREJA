<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;

class Admin_Controller extends Controller
{
    public function homeadmin(){
        $user = auth()->user();
        $umat = umat::get();
        $laki = umat::where('jns_kelamin','Laki-laki')->count();
        $perempuan = umat::where('jns_kelamin','Perempuan')->count();
        $baptis = umat::where('baptis','sudah')->count();
        $komuni = umat::where('komuni','sudah')->count();
        return view('admin.home', compact('user','umat','laki','perempuan','baptis','komuni'));
    }
    
    public function login(){
        return view('admin.loginpage');
    }

    public function loginpage(){
        return view('admin.loginpage');
    }

}
