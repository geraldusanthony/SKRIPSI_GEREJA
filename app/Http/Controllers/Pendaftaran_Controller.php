<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\persembahan;
use App\Models\jadwalmisa;
use PDF;



class Pendaftaran_Controller extends Controller
{
   
    
    public function homeumat(request $request){
        $jadwalmisa = jadwalmisa::all();
        return view('umat.home',compact('jadwalmisa'));
    }

    public function addpendaftaran(Request $request){ 
        $pendaftaran=pendaftaran::create($request->all());
        $kuota=$pendaftaran->id;
        $jumlah =$pendaftaran->jumlah;
        $jadwal=$pendaftaran->misa_id;
        if($kuota){
            $kurangkuota=jadwalmisa::where('id',$jadwal)->first();
            $kuotakurang=$kurangkuota->decrement('kuota', $jumlah);
            // $sukses=$kurangkuota-1;
        }
        return redirect('pilihjadwal')->with('sukses','Data Telah Di Tambah!');   
    }

    public function validasi($id){
        $view_daftarmisa = pendaftaran::where('id',$id)->get();
        return view('umat.validasi',compact('view_daftarmisa'));
    }

    public function viewtiket(){
        $daftarmisa = pendaftaran::all();
        return view('umat.viewtiket',compact('daftarmisa'));
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
        $user = auth()->user();
        return view('admin.datamisa',compact('daftarmisa','user'));
    }
    
    public function downloaddata($id){
        $daftarmisa = pendaftaran::where('id',$id)->get();
        $pdf = PDF::loadview('cetak.validasimisa_pdf',['daftarmisa'=>$daftarmisa]);
    	return $pdf->stream();  
    }

}
