@extends('layouts.app')

@section('content')

<div class="container">


<div class="card mt-12">

	<div class="card-header text-center">
			<a href="/upage/carirs" class="btn btn-outline-info float-left" role="button" aria-pressed="true">Kembali</a>
		<strong style="font-size: 40px">Data Rumah Sakit</strong>
	</div>

	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="{{ url('assets/img/rs.png') }}" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<div class="col-md-4"></div>
				<h4>Nama Rumah Sakit	: {{ $rumahsakit->nama_rs }}</h4></br>
				<h4>Alamat Rumah Sakit	: {{ $rumahsakit->alamat }}</h4></br>
				<hr>
				<p> Deskripsi :{{ $rumahsakit->deskripsi_rs }} </p>
			</div>
		</div>

		{{-- <div class="form-group right" style="margin-left: auto">
			<div class="col-md-8 offset-md4">
       			<input type="submit" class="btn btn-success" value="Buat Janji" style="margin-top: 50px;">
     		</div>
		</div> --}}
	</div>
</div>
</div>
@endsection