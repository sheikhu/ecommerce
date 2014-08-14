@extends('layout')

@section('top') @stop


@section('container')


@if(Session::has('success'))
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <span class="alert alert-success">
                {{ Session::get('success') }}
        </span>
    </div>
</div>
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Well done !</h1>
        <p>
            You are authenticated as <span class="label label-info">{{ Auth::user()->username }}</span> !
        </p>
        <p>
            <a href="{{ route('logout') }}" class="btn btn-primary btn-lg">
            Logout
            </a>
        </p>
    </div>
</div>




@stop
