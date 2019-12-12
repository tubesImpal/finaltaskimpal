<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RumahSakit;
use App\Dokter;

class AdminDokController extends Controller
{
    public function i()
    {
        $dokter = dokter::all();
    	return view('/dokter/v_dokter', ['dokter' => $dokter]);
    }

    public function tambah()
    {
        $rumahsakit = rumahsakit::get();
        return view('/dokter/tambah_dokter',['rumahsakit' => $rumahsakit]);
    }

    function simpan(Request $request)
	{
		$this->validate($request, [
			'spesialis' => 'required',
            'nama_dokter' => 'required',
            'jam_praktik' => 'required',
            'rs_praktik' => 'required'
		]);
        
		$dokter = new dokter;
        $dokter->nama_dokter = $request->input('nama_dokter');
        $dokter->spesialis = $request->input('spesialis');
        $dokter->jam_praktik = $request->input('jam_praktik');
        $dokter->rs_praktik = $request->input('rs_praktik');
		$dokter->save();
		return redirect('listdokter')->with('response' , 'Tambah Dokter Berhasil');
    }
    
    public function edit($id)
    {
        $dokter = dokter::where('id_dokter', $id)->first();
        return view('/dokter/edit_dokter', ['dokter' => $dokter, 'rumahsakit' => rumahsakit::get()]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'jam_praktik' => 'required',
            'rs_praktik' => 'required'
        ]);

        $dokter = dokter::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->jam_praktik = $request->jam_praktik;
        $dokter->rs_praktik = $request->input('rs_praktik');
        $dokter->save();
        return redirect('listdokter');
    }

    public function delete($id)
    {
        $dokter = dokter::find($id);
        $dokter->delete();
        return redirect('listdokter');
    }

    public function cari()
    {
        $dokter = dokter::All();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $dokter = dokter::where('nama_dokter','like',"%$kata_kunci%")->get();
        }
        return view('/dokter/cari_dokter', ['dokter' => $dokter]);
    }
  
}

?>


