<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persembahan;
use App\Models\persembahanling;
use PDF;

class Persembahan_Controller extends Controller
{
    

    public function addpersembahan(Request $request){ 
        persembahan::create($request->all());
        return redirect('persembahan')->with('sukses','Data Telah Di Tambah!');   
    }

    public function persembahan(request $request){
        $persembahan = persembahan::all();
        return view('admin.persembahan',compact('persembahan'));
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
        persembahanling::create($request->all());
        return redirect('persembahanling')->with('sukses','Data Telah Di Tambah!');   
    }

    public function persembahanling(request $request){
        $persembahanling = persembahanling::all();
        return view('admin.persembahanling',compact('persembahanling'));
    }

    public function cetakpersembahanling_pdf()
    {
    	$persembahanling = persembahanling::all();
    	$pdf = PDF::loadview('cetak.persembahanling_pdf',['persembahanling'=>$persembahanling]);
    	return $pdf->stream();
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
}
