<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;
use DataTables;

class Daftarumat_Controller extends Controller
{
    public function daftarumat(request $request){
        $umat = umat::all();
        if ($request->ajax()) {
            $umat = umat::select('ling');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('ling', function($row){
                         if($row->ling){
                            return '<span class="badge badge-primary">Active</span>';
                         }else{
                            return '<span class="badge badge-danger">Deactive</span>';
                         }
                    })
                    ->filter(function ($instance) use ($request) {
                        if ($request->get('ling') == '0' || $request->get('ling') == '1') {
                            $instance->where('ling', $request->get('ling'));
                        }
                        
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('ling', 'LIKE', "%$search%");
                                
                            });
                        }
                    })
                    ->rawColumns(['ling'])
                    ->make(true);
        }
        return view('admin.daftarumat',compact('umat'));
    }

    public function profileumat(request $request){
        $umat = umat::all();
        return view('admin.profileumat',compact('umat'));
    }

    public function baptis(request $request){
        $umat = umat::where('baptis','belum')->get();
        return view('admin.baptis',compact('umat'));
    }

    public function komuni(request $request){
        $umat = umat::where('komuni','belum')->get();
        return view('admin.komuni',compact('umat'));
    }

}
