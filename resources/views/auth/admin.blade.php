@extends('layouts.lmaster')

@section('judul', 'Dashboard Admin')

@section('konten')
    <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                </div>
            </div>
        </div>
@endsection
