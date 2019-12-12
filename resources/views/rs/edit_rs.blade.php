@extends('layouts.lmaster')

@section('judul_halaman', 'Update Rumah Sakit')

@section('konten')

    <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Data Rumah Sakit
                </div>
                <div class="card-body">
                    <form method="post" action="/rs/update/{{ $rumahsakit->id_rs }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama Rumah Sakit</label>
                            <input type="text" name="nama_rs" class="form-control" placeholder="Nama RS .." value=" {{ $rumahsakit->nama_rs }}">

                            @if($errors->has('nama_rs'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_rs')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat RS</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat RS .." value=" {{ $rumahsakit->alamat }}">

                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Deskripsi Rumah Sakit</label>
                            <textarea name="deskripsi_rs" class="form-control" rows="4" value="">{{ $rumahsakit->deskripsi_rs }}</textarea>
                            @if($errors->has('deskripsi_rs'))
                            <div class="text-danger">
                                {{ $errors->first('deskripsi_rs')}}
                            </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>

@endsection