<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
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
        $datenow = Carbon::now()->format('Y-m-d');
        $tanggal = jadwalkegiatan::pluck('tanggal')->toArray();
        $jadwalkegiatan = jadwalkegiatan::where('tanggal', '>', $datenow)->get();
        return view('umat.jadwalkegiatan',compact('jadwalkegiatan','datenow'));
    }
    
    public function viewjadwalmisa(request $request){
        $datenow = Carbon::now()->format('Y-m-d');
        $jadwalmisa = jadwalmisa::all();
        $tanggal = jadwalmisa::pluck('tanggal')->toArray();
        $jadwalmisa = jadwalmisa::where('tanggal', '>', $datenow)->get();
        return view('umat.viewjadwalmisa',compact('jadwalmisa','datenow'));
    }

    public function viewpendaftaranmisa(request $request){
        $daftarmisa = pendaftaran::all();
        return view('umat.pendaftaranmisa',compact('daftarmisa'));
    }

    public function index(){
        return view('umat.home');
    }

    public function pilihjadwal(request $request){
        $datenow = Carbon::now()->format('Y-m-d');
        $user = \Auth::user();
        $iduser = $user->id;
        $didaftar = pendaftaran::where('user_id',$iduser)->first();
        // $misaid = $didaftar->misa_id;
        $misaid = pendaftaran::where('user_id', $iduser)->pluck('misa_id')->toArray();
        if($misaid == null)
        {$jadwalmisa = jadwalmisa::whereDate('tanggal', '>', $datenow)->get();} 
        else{
        $jadwalmisa = jadwalmisa::whereNotIn('id', $misaid)->where('tanggal', '>', $datenow)->get();}
        // $jadwalmisa = jadwalmisa::all();
        // $daftarmisa = pendaftaran::all();
        return view('umat.pilihjadwal',compact('datenow','jadwalmisa','didaftar','misaid'));
    }

    public function lihatjadwal($id){
        $jadwalmisa = jadwalmisa::where('id',$id)->get();
        $umat = umat::all();
        $user = \Auth::user();
        $dataUmat = Umat::where('email', auth()->user()->email)->first();
        return view('umat.daftarmisa',compact('user','jadwalmisa','umat','dataUmat'));
    }

}
