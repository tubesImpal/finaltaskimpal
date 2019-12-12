@extends('layouts.app')

@section('judul', 'OHR : Landing Page')

@section('content')
<div class="row">
    <div class="col">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ url('assets/img/1.jpg') }}"  alt="First Slide" />
                    <div class="carousel-caption text-dark">
                        <h2>OHR</h2>
                        <p>Online Health Reservation</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ url('assets/img/2.jpg') }}" />

                    <div class="carousel-caption">
                        <h2>OHR</h2>
                        <p>Online Health Reservation</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ url('assets/img/3.jpg') }}" />
                    <div class="carousel-caption text-dark">
                        <h2>OHR</h2>
                        <p>Online Health Reservation</p>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection