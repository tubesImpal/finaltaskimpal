@extends('layouts.app')

@section('content')

<form action="/upage/caridokter">
	<input class="form-control" type="text" placeholder="Masukkan Spesialis" aria-label="Search" name="kata_kunci">
	<button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
</form>
<br>
<div class="row">
	@foreach($dokter as $d)
	<div class="col-sm-3">
		<div class="card">
			<img src="{{ url('assets/img/dokter.png') }}" class="card-img-top" alt="...">

			<div class="card-body">
				<div class="card-title"><h2>{{ $d->nama_dokter }}</h2></div>
				<p>{{ $d->spesialis }}</p>
			</div>

			<div class="card-footer">
				<a href="/caridokter/detaildok/{{ $d->id_dokter }}" class="card-link">Lebih Lanjut</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection