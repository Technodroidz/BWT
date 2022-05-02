@extends('web.welcome')

@section('title','Channels')

@section('content')

<div class="wrap-height">
    <br>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
    @if(Session::has($key))
    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
    @endif
    @endforeach
    <div class="row">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go
                Back</button>
        </div>
    </div>
    <div class="row">
        <h5>Order Placed Successfully!</h5>
    </div>
</div>

@endsection