<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lowongan;
use App\Models\Alumni;
use App\Models\Perusahaan;
use DB;

class PageController extends Controller
{
    function show(){
        $data['lowongan'] = Lowongan::where('status','active')->get();
  
        return view('admin.loker', $data);
      }

      function add(){
        $perusahaan = DB::table('perusahaan')->get();
        $data =[
            'action'=>url('loker/create'),
            'tombol'=>'simpan',
            'lowongan'=>(object)[
                'id_perusahaan'=>'',
                'tanggal'=>'',
                'judul'=>'',
                'deskripsi'=>'',
                'status'=>'',
            ]
            ];
            return view('admin.form_loker',['perusahaan'=>$perusahaan],$data);
    }

    function create(Request $request){
        Lowongan::create([
            'id_perusahaan'=> $request->id_perusahaan,
            'nis'=> Auth::guard('alumni')->user()->nis,
            'tanggal'=> $request->tanggal,
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'status'=>'inactive',
        ]);
        return redirect('loker');
    }
    
}