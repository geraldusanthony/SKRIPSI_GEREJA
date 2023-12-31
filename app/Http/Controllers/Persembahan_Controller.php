<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persembahan;
use App\Models\persembahanling;
use App\Models\jadwalmisa;
use PDF;

class Persembahan_Controller extends Controller
{
    

    public function addpersembahan(Request $request){ 
        persembahan::create($request->all());
        return redirect('persembahan')->with('sukses','Data Telah Di Tambah!');   
    }

    public function persembahan(request $request){
        $persembahan = persembahan::all();
        $jadwalmisa = jadwalmisa::all();
        $user = auth()->user();
        return view('admin.persembahan',compact('persembahan','user','jadwalmisa'));
    }

    public function deletepersembahan($id){
        persembahan::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editpersembahan(Request $request, $id){
        $persembahan =persembahan::find($id);
        $persembahan->jumlah = $request->input('jumlah');
        $persembahan->jumlah2 = $request->input('jumlah2');
        $persembahan->save();
        return redirect('persembahan');
    }

    public function findpersembahan($id){
        $persembahan = persembahan::where('id',$id)->first();
        $data = [
            'title' => 'persembahan',
            'persembahan' => $persembahan
        ];
        return view('admin.editpersembahan',$data);
    }

    public function cetakpersembahan_pdf()
    {
    	$persembahan = persembahan::all();
    	$pdf = PDF::loadview('cetak.persembahan_pdf',['persembahan'=>$persembahan]);
    	return $pdf->stream();
    }

    public function addpersembahanling(Request $request){ 
        // persembahanling::create($request->all());
        // $jumlahinput = $request->jumlah;
        // $jumlahbefore = $jumlahinput*(10/100);
        // $jumlahdiskon = $jumlahinput-$jumlahbefore; 
        $data = [
            'tanggal'=>$request->tanggal,
            'tahun'=>$request->tahun,
            'ket'=>$request->ket,
            'nama_ling'=>$request->nama_ling,
            'jumlah'=>$request->jumlah,
        ];
        persembahanling::create($data);
        return redirect('persembahanling')->with('sukses','Data Telah Di Tambah!');   
    }

    public function persembahanling(request $request){
        $persembahanling = persembahanling::all();
        $user = auth()->user();
        return view('admin.persembahanling',compact('persembahanling','user'));
    }

    public function cetakpersembahanling_pdf()
    {
    	$persembahanling = persembahanling::all();
    	$pdf = PDF::loadview('cetak.persembahanling_pdf',['persembahanling'=>$persembahanling]);
    	return $pdf->stream('Data Persembahan Lingkungan.pdf');
    }

    public function deletepersembahanling($id){
        persembahanling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editpersembahanling(Request $request, $id){
        $persembahanling = persembahanling::find($id);
        $persembahanling->jumlah = $request->input('jumlah');
        $persembahanling->save();
        return redirect('persembahanling');
    }

    public function findpersembahanling($id){
        $persembahanling = persembahanling::where('id',$id)->first();
        $data = [
            'title' => 'persembahanling',
            'persembahanling' => $persembahanling
        ];
        return view('admin.editpersembahanling',$data);
    }

    public function viewdata($id){
        $view_data = persembahanling::where('id',$id)->get();
        $pdf = PDF::loadview('cetak.validasiling_pdf',['view_data'=>$view_data]);
    	return $pdf->stream('Tanda Terima Persembahan Lingkungan.pdf');
    }
    
}
