@extends('layouts.lmaster')

@section('judul_halaman', 'Cari Pesanan')

@section('konten')


<div class="md-form mt-0">
    <form action={{ url('/carirev') }}>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="kata_kunci">
            <button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
    </form>
</div>
    <br>
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

@endsection

