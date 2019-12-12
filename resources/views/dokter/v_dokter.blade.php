@extends('layouts.lmaster')

@section('judul_halaman', 'List Dokter')

@section('konten')
<div class="card mt-5">
    <div class="card-header text-center">
        Data Dokter
    </div>
    <div class="card-body">
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
    </div>
</div>
@endsection

