<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;

class LamaranController extends Controller
{
    //
    function show(){
        $data['lamaran'] = Lamaran::all();
        return view('lamaran', $data);
      }

    function add(){
        $data =[
            'action'=>url('lamaran/create'),
            'tombol'=>'simpan',
            'lamaran'=>(object)[
                'nis'=>'',
                'nama'=>'',
                'jk'=>'',
                'jurusan'=>'',
                'tgl_lahir'=>'',
                'alamat'=>'',
                'telepon'=>'',
                'tahun_ajaran'=>'',
                'foto'=>''
            ]
            ];
            return view('form_lamaran',$data);
    }

    function create(Request $request){
        Lamaran::create([
            'nis'=> $request->nis,
            'nama'=> $request->nama,
            'jk'=> $request->jk,
            'jurusan'=> $request->jurusan,
            'tgl_lahir'=> $request->tgl_lahir,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'tahun_ajaran'=> $request->tahun_ajaran,
            'foto'=>  $request->file('foto')->store('foto')
        ]);
        return redirect('lamaran');
    }
    
    function delete($id){
        Lamaran::where('id',$id)->delete();
        return redirect('lamaran');
    }

    function edit($id){ 
        $data['lamaran'] = Lamaran::where('id', $id)->first();
        $data['action'] = url('lamaran/update').'/'.$data['lamaran']->id;
        $data['tombol'] = "Update";

        return view('form_lamaran',$data);
    }

    function update(Request $request){
        $data = Lamaran::where('id',$request->id)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Lamaran::where('id', $request->id)->update([
            'nis'=> $request->nis,
            'nama'=> $request->nama,
            'jk'=> $request->jk,
            'jurusan'=> $request->jurusan,
            'tgl_lahir'=> $request->tgl_lahir,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'tahun_ajaran'=> $request->tahun_ajaran,
            'foto'=>  $foto
        ]);
        return redirect('lamaran');
    }
}
