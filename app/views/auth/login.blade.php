@extends('layout')

@section('top') @stop

@section('container')

<div class="row">
    <div class="well well-lg col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">


        {{ BootForm::open()->action('/login') }}
        <h2 class="text-center">Authentication</h2>
        {{ BootForm::text('Email', 'email')->placeholder('john.doe@domain.tld')}}

        {{ BootForm::password('Password', 'password') }}


        {{ BootForm::submit('Login')->addClass('btn-block') }}

        {{ BootForm::close() }}
    </div>
</div>

@stop
