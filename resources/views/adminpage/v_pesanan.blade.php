@extends('layouts.lmaster')

@section('judul_halaman', 'List Reservasi')

@section('konten')
<div class="card mt-5">
    <div class="card-header text-center">
        Data Reservasi
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No. Antrian</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Jam Praktik</th>
                    <th>RS Praktik</th>
                    <th>Tanggal Reservasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesanan as $p)
                <tr>
                    <td>{{ $p->id_pesan }}</td>
                    <td>{{ $p->nama_pasien }}</td>
                    <td>{{ $p->nama_dokter }}</td>
                    <td>{{ $p->jam_praktik }}</td>
                    <td>{{ $p->rs_praktik }}</td>
                    <td>{{ $p->tglrev }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

