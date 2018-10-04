@extends('layouts.app')

@section('content')
@include('layouts.success')
@include('layouts.errors')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-info" href="{{ action('AppointmentController@appointment') }}" style="font-size: 20px;"> Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
