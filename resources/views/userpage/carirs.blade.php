@extends('layouts.app')

@section('content')

<form action="/upage/carirs">
	<input class="form-control" type="text" placeholder="Masukkan Alamat Rumah Sakit" aria-label="Search" name="kata_kunci">
	<button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
</form>
<br>
<div class="row">
	@foreach($rumahsakit as $r)
	<div class="col-sm-3">
		<div class="card">
			<img src="{{ url('assets/img/rs.png') }}" class="card-img-top" alt="...">

			<div class="card-body">
				<div class="card-title"><h2>{{ $r->nama_rs }}</h2></div>
				<p>{{ $r->alamat }}</p>
			</div>

			<div class="card-footer">
				<a href="/carirs/detailrs/{{$r->id_rs}}" class="card-link">Read More</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection