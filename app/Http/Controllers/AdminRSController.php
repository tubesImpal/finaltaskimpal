<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RumahSakit;

class AdminRSController extends Controller
{
    public function g()
    {
        $rumahsakit = rumahsakit::all();
    	return view('/rs/v_rs', ['rumahsakit' => $rumahsakit]);
    }

    public function tambah()
    {
    	return view('/rs/tambah_rs');
    }

    public function simpan(Request $request)
	{
		$this->validate($request, [
			'nama_rs' => 'required',
            'alamat' => 'required',
            'deskripsi_rs' => 'required|max:255'
		]);

		$rs = new rumahsakit;
		$rs->nama_rs = $request->input('nama_rs');
        $rs->alamat = $request->input('alamat');
        $rs->deskripsi_rs = $request->input('deskripsi_rs');
		$rs->save();
		return redirect('listrs')->with('response' , 'Tambah RS Berhasil');
    }
    
    public function edit($id)
    {
        $rumahsakit = rumahsakit::where('id_rs', $id)->first();
        return view('/rs/edit_rs', ['rumahsakit' => $rumahsakit]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama_rs' => 'required',
        'alamat' => 'required',
        'deskripsi_rs' => 'required|max:255'
        ]);
        $rumahsakit = rumahsakit::find($id);
        $rumahsakit->nama_rs = $request->nama_rs;
        $rumahsakit->alamat = $request->alamat;
        $rumahsakit->deskripsi_rs = $request->deskripsi_rs;
        $rumahsakit->save();
        return redirect('listrs');
    }

    public function delete($id)
    {
        $rumahsakit = rumahsakit::find($id);
        $rumahsakit->delete();
        return redirect('listrs');
    }

    public function cari()
    {
        $rumahsakit = rumahsakit::All();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $rumahsakit = rumahsakit::where('nama_rs','like',"%$kata_kunci%")->get();
        }
        return view('rs/cari_rs', ['rumahsakit' => $rumahsakit]);
    }
}
