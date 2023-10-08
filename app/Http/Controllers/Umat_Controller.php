<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalmisa;
use App\Models\persembahan;
use App\Models\pendaftaran;
use App\Models\jadwalkegiatan;
use App\Models\umat;
use App\Models\persembahanling;

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
        $user = auth()->user();
        return view('umat.index',compact('user'));
    }

    public function loginumat(){
        return view('umat.login');
    }

    public function viewpersembahan(request $request){
        $persembahan = persembahan::all();
        $persembahanling = persembahanling::all();
        return view('umat.persembahan',compact('persembahan','persembahanling'));
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

    public function pilihjadwal(request $request){
        $user = \Auth::user();
        $iduser = $user->name;
        $didaftar = pendaftaran::where('nama',$iduser)->first();
        // $misaid = $didaftar->misa_id;
        $misaid = pendaftaran::where('nama', $iduser)->pluck('misa_id')->toArray();
        if($misaid == null)
        {$jadwalmisa = jadwalmisa::all();} 
        else{
        $jadwalmisa = jadwalmisa::whereNotIn('id', $misaid)->get();}
        // $jadwalmisa = jadwalmisa::all();
        // $daftarmisa = pendaftaran::all();
        return view('umat.pilihjadwal',compact('jadwalmisa','didaftar','misaid'));
    }

    public function lihatjadwal($id){
        $jadwalmisa = jadwalmisa::where('id',$id)->get();
        $umat = umat::all();
        $user = \Auth::user();
        return view('umat.daftarmisa',compact('user','jadwalmisa','umat'));
    }

}
