<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\RumahSakit;
use App\Dokter;
use App\Pesanan;
use PDF;


class UserController extends Controller {

    public function fa(){
        return view('userpage/faq');
    }

    public function cd(){
        $dokter = dokter::all();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $dokter = dokter::where('spesialis','like',"%$kata_kunci%")->get();
        }
        return view('userpage/caridokter',['dokter' => $dokter]);
    }

    public function cr(){
        $rumahsakit = rumahsakit::all();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $rumahsakit = rumahsakit::where('alamat','like',"%$kata_kunci%")->get();
        }
        return view('userpage/carirs',['rumahsakit' => $rumahsakit]);
    }

    public function dp($id){
        $pesanan = pesanan::where('id',$id)->get();
        return view('userpage/daftarpesan',['pesanan' => $pesanan]);
    }

    public function re(Request $request){
        $this->validate($request, [
			'tglrev' => 'required'
		]);

        $pe = new pesanan;
        $pe->nama_dokter = $request->input('nama_dokter');
        $pe->id = Auth::user()->id;
        $pe->nama_pasien = Auth::user()->name;
        $pe->jam_praktik = $request->input('jam_praktik');
        $pe->rs_praktik = $request->input('rs_praktik');
        $pe->tglrev = $request->input('tglrev');
        $pe->save();
		return redirect('listpesan/{{ Auth::user()->id }}')->with('response' , 'Tambah Pesanan Berhasil');
    }

    public function dr($id){
        $rumahsakit = rumahsakit::where('id_rs', $id)->first();
        return view('/userpage/detailinformasirs', ['rumahsakit' => $rumahsakit]);
    }

    public function dd($id){
        $dokter = dokter::where('id_dokter', $id)->first();
        return view('/userpage/detailinformasidok', ['dokter' => $dokter]);
    }

    public function cp($id){
        $pesanan = pesanan::where('id_pesan', $id)->first();
        $pdf = PDF::loadview('userpage/cetak_pdf',['pesanan'=>$pesanan]);
	    return $pdf->stream();
    }

}
?>
