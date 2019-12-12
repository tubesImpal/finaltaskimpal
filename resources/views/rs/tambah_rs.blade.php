@extends('layouts.lmaster')

@section('judul_halaman', 'Tambah Rumah Sakit')

@section('konten')

 <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH RUMAH SAKIT</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="/tambahrs/simpan">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Rumah Sakit</label>
                            <input name="nama_rs" class="form-control" placeholder="Masukkan Nama Rumah Sakit">
 
                             @if($errors->has('nama_rs'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_rs')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Alamat Rumah Sakit</label>
                            <input name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah Sakit">
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Deskripsi Rumah Sakit</label>
                            <textarea name="deskripsi_rs" class="form-control" rows="4"></textarea>
                            @if($errors->has('deskripsi_rs'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi_rs')}}
                                </div>
                            @endif
                        </div>

 						
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan" style="margin-top: 50px;">
                        </div>
 
                    </form>
 
                </div>
            </div>

@endsection