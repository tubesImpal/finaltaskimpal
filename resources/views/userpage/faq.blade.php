@extends('layouts.app')

@section('judul', 'OHR : FAQ')

@section('content')
<div class="container">
	<h2><center>----Frequently Asked Question----</center></h2>
	<br><br>
	<div id="accordion">
	  <div class="card">
		<div class="card-header" style="background-color: #53c9b2;">
		  <a class="card-link text-white" data-toggle="collapse" href="#collapseOne">
			Pertanyaan 1
		  </a>
		</div>
		<div id="collapseOne" class="collapse show" data-parent="#accordion">
		  <div class="card-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		  </div>
		</div>
	  </div>
	  <div class="card">
		<div class="card-header" style="background-color: #53c9b2;">
		  <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseTwo">
			Pertanyaan 2
		</a>
		</div>
		<div id="collapseTwo" class="collapse" data-parent="#accordion">
		  <div class="card-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		  </div>
		</div>
	  </div>
	  <div class="card">
		<div class="card-header" style="background-color: #53c9b2;">
		  <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseThree">
			Pertanyaan 3
		  </a>
		</div>
		<div id="collapseThree" class="collapse" data-parent="#accordion">
		  <div class="card-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		  </div>
		</div>
	  </div>
	  <div class="card">
			<div class="card-header" style="background-color: #53c9b2;">
			  <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseFour">
				Pertanyaan 4
			  </a>
			</div>
			<div id="collapseFour" class="collapse" data-parent="#accordion">
			  <div class="card-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			  </div>
			</div>
		  </div>
	</div>
</div>
@endsection