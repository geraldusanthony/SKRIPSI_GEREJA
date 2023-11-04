<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;
use DataTables;

class Daftarumat_Controller extends Controller
{
    public function daftarumat(request $request){
        $user = auth()->user();
        $umat = umat::all();
        return view('admin.daftarumat',compact('umat','user'));
    }

    public function umatdaftar($ling){
        $umat = umat::where('ling',$ling)->get();
        $count = count($umat);
        return response()->json([
            'umat'=>$umat,
            'count'=>$count
        ]);
    }

    public function profileumat(request $request){
        $umat = umat::all();
        return view('admin.profileumat',compact('umat'));
    }

    public function baptis(request $request){
        $user = auth()->user();
        $umat = umat::where('baptis','belum')->get();
        return view('admin.baptis',compact('umat','user'));
    }

    public function komuni(request $request){
        $user = auth()->user();
        $umat = umat::where('komuni','belum')->get();
        return view('admin.komuni',compact('umat','user'));
    }

}
