<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\persembahan;
use App\Models\jadwalmisa;



class Pendaftaran_Controller extends Controller
{
   
    
    public function homeumat(request $request){
        $jadwalmisa = jadwalmisa::all();
        return view('umat.home',compact('jadwalmisa'));
    }

    public function addpendaftaran(Request $request){ 
        pendaftaran::create($request->all());
        return redirect('validasi')->with('sukses','Data Telah Di Tambah!');   
    }

    public function datamisa(){
        $daftarmisa = pendaftaran::all();
        return view('umat.validasi',compact('daftarmisa'));
    }
    
    public function deletependaftaran($id){
        pendaftaran::where('id',$id)->delete();
        return redirect()->back();
    }

    public function findiddatamisa($id){
        $daftarmisa = pendaftaran::find($id);
        $data = [
            'title' => 'data',
            'orderan' => $daftarmisa
        ];
        return view('umat.validasi', $data);
    }

    public function datamisaumat(){
        $daftarmisa = pendaftaran::all();
        return view('admin.datamisa',compact('daftarmisa'));
    }
    

}
