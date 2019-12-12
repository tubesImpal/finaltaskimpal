@extends('layouts.lmaster')

@section('judul_halaman', 'Cari Rumah Sakit')

@section('konten')

<hr>
<div class="md-form mt-0">
    <form action="carirs">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="kata_kunci">
            <button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
    </form>
</div>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama Rumah Sakit</th>
                <th>Alamat Rumah Sakit</th>
                <th>Deskripsi Rumah Sakit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rumahsakit as $r)
            <tr>
                <td>{{ $r->nama_rs }}</td>
                <td>{{ $r->alamat }}</td>
                <td>{{ $r->deskripsi_rs }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
