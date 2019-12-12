@extends('layouts.lmaster')

@section('judul_halaman', 'Update Dokter')

@section('konten')
    <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Data Dokter
                </div>
                <div class="card-body">                    
                    <form method="post" action="/dokter/update/{{ $dokter->id_dokter }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_dokter" class="form-control" placeholder="Nama dokter .." value=" {{ $dokter->nama_dokter }}">

                            @if($errors->has('nama_dokter'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_dokter')}}
                                </div>
                            @endif

                        </div>

                        <div class="dropwdown">
                        	<label>Specialis</label>
                        	<select class="form-control" name="spesialis" value="{{ $dokter->spesialis }}">
                                <option>Dokter Gigi</option>
                                <option>Dokter Anak</option>
                                <option>Dokter Kandungan</option>
                                <option>Dokter Bedah</option>
                                <option>Dokter Mata</option>
                                <option>Dokter Jantung</option>
                                <option>Dokter Kulit & Kelamin</option>
                        	</select>

                             @if($errors->has('spesialis'))
                                <div class="text-danger">
                                    {{ $errors->first('spesialis')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="dropwdown">
                        	<label>Jam Praktik</label>
                        	<select class="form-control" name="jam_praktik">
                                  <option>08:00</option>
                                  <option>09:00</option>
                                  <option>10:00</option>
                                  <option>11:00</option>
                                  <option>12:00</option>
                                  <option>13:00</option>
                                  <option>14:00</option>
                                  <option>15:00</option>
                                  <option>16:00</option>
  							</select>

                             @if($errors->has('jam_praktik'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_praktik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="dropwdown">
                            <label>Rumah Sakit</label>
                            <select class="form-control" name="rs_praktik">
                                @foreach($rumahsakit as $r)
									<option>{{ $r->nama_rs}}</option>
								@endforeach
                            </select>    

                             @if($errors->has('rs_praktik'))
                                <div class="text-danger">
                                    {{ $errors->first('rs_praktik')}}
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