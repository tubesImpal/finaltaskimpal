@extends('layouts.lmaster')

@section('judul_halaman', 'Cari Dokter')

@section('konten')


<div class="md-form mt-0">
    <br>
    <form action={{ url('caridokter') }}>
            <input class="form-control" type="text" placeholder="Masukkan Nama Dokter" aria-label="Search" name="kata_kunci">
            <button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
    </form>
</div>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Jam Praktik</th>
                <th>RS Praktik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokter as $d)
            <tr>
                <td>{{ $d->nama_dokter }}</td>
                <td>{{ $d->spesialis }}</td>
                <td>{{ $d->jam_praktik }}</td>
                <td>{{ $d->rs_praktik }}</td>
                <td>
                    <a href="dokter/edit/{{ $d->id_dokter }}" class="btn btn-warning">Edit</a>
                    <a href="dokter/hapus/{{ $d->id_dokter }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

