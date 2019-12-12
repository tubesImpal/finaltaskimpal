@extends('layouts.lmaster')

@section('judul_halaman', 'List Rumah Sakit')

@section('konten')

<div class="card mt-5">
    <div class="card-header text-center">
        Data Rumah Sakit
    </div>
    <div class="card-body">
        <br/>
        <br/>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat Rumah Sakit</th>
                    <th>Deskripsi Rumah Sakit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rumahsakit as $r)
                <tr>
                    <td>{{ $r->nama_rs }}</td>
                    <td>{{ $r->alamat }}</td>
                    <td>{{ $r->deskripsi_rs }}</td>
                    
                    <td>
                        <a href="/rs/edit/{{ $r->id_rs }}" class="btn btn-warning">Edit</a>
                        <a href="/rs/hapus/{{ $r->id_rs }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection