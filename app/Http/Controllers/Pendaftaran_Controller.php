<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\persembahan;
use App\Models\jadwalmisa;
use PDF;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class Pendaftaran_Controller extends Controller
{
   
    
    public function homeumat(request $request){
        $datenow = Carbon::now()->format('Y-m-d');
        $jadwalmisa = jadwalmisa::all();
        $tanggal = jadwalmisa::pluck('tanggal')->toArray();
        $jadwalmisa = jadwalmisa::where('tanggal', '>', $datenow)->get();
        return view('umat.home',compact('jadwalmisa','datenow'));
    }

    public function addpendaftaran(Request $request){ 
        $pendaftaran = pendaftaran::create($request->all());
        $kuota = $pendaftaran->id;
        $jumlah = $pendaftaran->jumlah;
        $jadwal = $pendaftaran->misa_id;
        if($kuota){
            $kurangkuota = jadwalmisa::where('id',$jadwal)->first();
            $kuotakurang = $kurangkuota->decrement('kuota', $jumlah);
        }
        return redirect('pilihjadwal')->with('sukses','Data Telah Di Tambah!');   
    }

    public function daftar(Request $request){
        $pendaftaran = pendaftaran::create($request->all());
        $kuota = $pendaftaran->id;
        $jumlah = $pendaftaran->jumlah;
        $jadwal = $pendaftaran->misa_id;
        if($kuota){
            $kurangkuota = jadwalmisa::where('id',$jadwal)->first();
            $kuotakurang = $kurangkuota->decrement('kuota', $jumlah);
        }
        return redirect('/validasi')->with('sukses','Data Telah Di Tambah!');  
    }

    public function validasi(){
        $daftarmisa = pendaftaran::where('jumlah','1')->get();
        return view('umat.validasi', compact('daftarmisa',));
    }

    public function viewtiket(){
        $datenow = Carbon::now()->format('Y-m-d');
        $user = auth()->user();
        $userid = $user->id;
        $daftarmisa = DB::table('daftarmisa')->where('user_id', $userid)
        ->leftJoin('jadwalmisa', 'daftarmisa.misa_id', '=', 'jadwalmisa.id')
        ->select('daftarmisa.id','daftarmisa.misa_id','daftarmisa.jadwal','daftarmisa.nama')
        ->whereDate('jadwalmisa.tanggal', '>', $datenow)
        ->get();
        return view('umat.viewtiket',compact('daftarmisa','userid'));
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
