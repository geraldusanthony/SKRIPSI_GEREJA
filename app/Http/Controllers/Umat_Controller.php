<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalmisa;
use App\Models\persembahan;
use App\Models\pendaftaran;
use App\Models\jadwalkegiatan;
use App\Models\umat;

class Umat_Controller extends Controller
{
    public function umat(request $request){
        $persembahan = persembahan::all();
        return view('umat.home',compact('persembahan'));
    }

    public function viewdaftarumat($id){
        $view_umat = umat::where('id',$id)->get();
        return view('admin.profileumat',compact('view_umat'));
    }

    public function indexumat(){
        return view('umat.index');
    }

    public function loginumat(){
        return view('umat.login');
    }

    public function viewpersembahan(request $request){
        $persembahan = persembahan::all();
        return view('umat.persembahan',compact('persembahan'));
    }

    public function viewkegiatan(request $request){
        $jadwalkegiatan = jadwalkegiatan::all();
        return view('umat.jadwalkegiatan',compact('jadwalkegiatan'));
    }
    
    public function viewjadwalmisa(request $request){
        $jadwalmisa = jadwalmisa::all();
        return view('umat.viewjadwalmisa',compact('jadwalmisa'));
    }

    public function viewpendaftaranmisa(request $request){
        $daftarmisa = pendaftaran::all();
        return view('umat.pendaftaranmisa',compact('daftarmisa'));
    }

    public function index(){
        return view('umat.home');
    }




}
