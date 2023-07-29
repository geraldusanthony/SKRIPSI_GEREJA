<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalkegiatan;

class Jadwalkegiatan_Controller extends Controller
{
    public function jadwalkegiatan(request $request){
        $jadwalkegiatan = jadwalkegiatan::all();
        return view('admin.jadwalkegiatan',compact('jadwalkegiatan'));
    }

    public function addjadwalkegiatan(Request $request){ 
        jadwalkegiatan::create($request->all());
        return redirect('jadwalkegiatan')->with('sukses','Data Telah Di Tambah!');   
    }

    public function deletejadwalkegiatan($id){
        jadwalkegiatan::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editjadwalkegiatan(Request $request, $id){
        $jadwalkegiatan = jadwalkegiatan::find($id);
        $jadwalkegiatan->hari = $request->input('hari');
        $jadwalkegiatan->tanggal = $request->input('tanggal');
        $jadwalkegiatan->jam = $request->input('jam');
        $jadwalkegiatan->tempat = $request->input('tempat');
        $jadwalkegiatan->kegiatan = $request->input('kegiatan');
        $jadwalkegiatan->save();
        return redirect('jadwalkegiatan');
    }

    public function findjadwalkegiatan($id){
        $jadwalkegiatan = jadwalkegiatan::where('id',$id)->first();
        $data = [
            'title' => 'jadwalkegiatan',
            'jadwalkegiatan' => $jadwalkegiatan
        ];
        return view('admin.editjadwalkegiatan',$data);
    }



}
