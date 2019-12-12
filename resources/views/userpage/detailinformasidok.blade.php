@extends('layouts.app')

@section('content')

<div class="container">


<div class="card mt-12">
	<div class="card-header text-center">
		<a href="/upage/caridokter" class="btn btn-outline-info float-left" role="button" aria-pressed="true">Kembali</a>
		<strong style="font-size: 40px">Data Dokter</strong>
	</div>
	<form method="post" action="/reservasi">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="{{ url('assets/img/dokter.png') }}" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				
				<input type="hidden" name="nama_dokter" value="{{ $dokter->nama_dokter }}">
				<input type="hidden" name="spesialis" value="{{ $dokter->spesialis }}">
				<input type="hidden" name="jam_praktik" value="{{ $dokter->jam_praktik }}">
				<input type="hidden" name="rs_praktik" value="{{ $dokter->rs_praktik }}">
					{{ csrf_field() }}
				<h4>Nama Dokter	: {{ $dokter->nama_dokter }}</h4></br>
				<h4>Spesialis	: {{ $dokter->spesialis }}</h4></br>
				<h4>Jam Praktik	: {{ $dokter->jam_praktik }}</h4></br>
				<h4>RS Praktik	: {{ $dokter->rs_praktik }}</h4></br>
				<div class="form-group">
						<label>Tanggal Reservasi</label>
						<input type="date" name="tglrev" class="form-control" placeholder="Tanggal Reservasi">

						 @if($errors->has('tglrev'))
							<div class="text-danger">
								{{ $errors->first('tgl_rev')}}
							</div>
						@endif

				</div>
				
			</div>	
		</div>

		<div class="form-group right" style="margin-left: auto">
			<div class="col-md-8 offset-md4">
       			<input type="submit" class="btn btn-success" value="Buat Janji" style="margin-top: 50px;">
     		</div>
		</div>
	</div>
</form>
</div>
</div>
@endsection