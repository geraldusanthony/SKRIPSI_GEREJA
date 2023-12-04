<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalmisa;
use App\Models\pendaftaran;
use PDF;
use Illuminate\Support\Facades\DB;

class Jadwalmisa_Controller extends Controller
{
    public function jadwalmisa(){
        $user = auth()->user();
        return view('admin.jadwalmisa', compact('user'));
    }

    public function addjadwalmisa(Request $request){ 
        jadwalmisa::create($request->all());
        return redirect('jadwalmisa')->with('sukses','Data Telah Di Tambah!');   
    }

    public function pendaftaran(request $request){
        $user = auth()->user();
        $jadwalmisa = jadwalmisa::all();
        // $jumlah = pendaftaran::where('misa_id','')->count();
        return view('admin.pendaftaran',compact('jadwalmisa','user'));
    }

    public function deletejadwal($id){
        jadwalmisa::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editjadwal(Request $request, $id){
        $jadwalmisa = jadwalmisa::find($id);
        $jadwalmisa->hari = $request->input('hari');
        $jadwalmisa->tanggal = $request->input('tanggal');
        $jadwalmisa->jam = $request->input('jam');
        $jadwalmisa->keterangan = $request->input('keterangan');
        $jadwalmisa->kuota = $request->input('kuota');
        $jadwalmisa->save();
        return redirect('pendaftaran');
    }

    public function findjadwal($id){
        $jadwalmisa = jadwalmisa::where('id',$id)->first();
        $data = [
            'title' => 'jadwalmisa',
            'jadwalmisa' => $jadwalmisa
        ];
        return view('admin.editjadwal',$data);
    }

    public function cetakjadwalmisa_pdf()
    {
    	$jadwalmisa = jadwalmisa::all();
    	$pdf = PDF::loadview('cetak.jadwalmisa_pdf',['jadwalmisa'=>$jadwalmisa]);
    	return $pdf->stream('Data Jadwal Misa Paroki.pdf');
    }
    
    public function cetakdetailmisa_pdf($id)
    {
        $view_data = pendaftaran::where('misa_id', $id)->get();
    	$pdf = PDF::loadview('cetak.detailmisa_pdf',['view_data'=>$view_data])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }
}
