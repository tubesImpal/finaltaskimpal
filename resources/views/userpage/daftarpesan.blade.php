@extends('layouts.app')

@section('content')

{{-- <form action="/upage/carirs">
	<input class="form-control" type="text" placeholder="Masukkan Alamat Rumah Sakit" aria-label="Search" name="kata_kunci">
	<button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
</form>
<br> --}}
<div class="row">
	@foreach($pesanan as $p)
	<div class="col-sm-3">
		<div class="card">
			<img src="{{ url('assets/img/pesan.png') }}" class="card-img-top" alt="...">

			<div class="card-body">
				<div class="card-title"><h2>{{ $p->id_pesan }}</h2></div>
				<p>{{ $p->nama_dokter }}</p>
				<p>{{ $p->jam_praktik }}</p>
				<p>{{ $p->rs_praktik }}</p>
				<p>{{ $p->tglrev }}</p>
			</div>
			<div class="card-footer">
					<a href="/cetakpdf/{{ $p->id_pesan }}" class="card-link">Cetak</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection