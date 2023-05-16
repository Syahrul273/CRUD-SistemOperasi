<?php

namespace App\Http\Controllers;

use App\Models\SistemOperasi;
use Illuminate\Http\Request;
use App\Http\Requests\SistemOperasiRequest;

class SistemOperasiController extends Controller
{
    public function index(){
        $SistemOperasi = SistemOperasi::get();
        return view('index', compact('SistemOperasi'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $SistemOperasi =SistemOperasi::where('id',$id)->first();
        return view('edit', compact('SistemOperasi'));
    }

    public function lihat($id){
        $SistemOperasi =SistemOperasi::where('id',$id)->first();
        return view('lihat', compact('SistemOperasi'));
    }


    public function store (SistemOperasiRequest $request)
    {
        $SistemOperasi = new SistemOperasi();

        $SistemOperasi->nama_os = $request->nama_os;
        $SistemOperasi->deskripsi = $request->deskripsi;

        $SistemOperasi->save();

        return redirect('/');
    }
    public function update (SistemOperasiRequest $request, $id)
    {
        $SistemOperasi =SistemOperasi::where('id',$id)->first();

        $SistemOperasi->nama_os = $request->nama_os;
        $SistemOperasi->deskripsi = $request->deskripsi;

        $SistemOperasi->update();

        return redirect('/');
    }
    public function hapus ($id)
    {
        $SistemOperasi =SistemOperasi::where('id',$id)->first();

        $SistemOperasi->delete();

        return redirect('/');
    }
}
