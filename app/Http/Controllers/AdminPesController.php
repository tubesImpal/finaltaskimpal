<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesanan;

use PDF;

class AdminPesController extends Controller
{
    public function i()
    {
        $pesanan = pesanan::all();
    	return view('/adminpage/v_pesanan', ['pesanan' => $pesanan]);
    }

    public function cari()
    {
        $pesanan = pesanan::All();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $pesanan = pesanan::where('nama_dokter','like',"%$kata_kunci%")->get();
        }
        return view('/adminpage/cari_pesanan', ['pesanan' => $pesanan]);
    }
  
}

?>


