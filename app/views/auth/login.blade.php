@extends('layout')

@section('styles')
    @parent

    <style>
    .container {background-color: transparent;}
    </style>
@stop

@section('container')

<div class="row">
    <div class="well well-lg col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">


        {{ BootForm::open()->action(route('login'))->addClass('login-form') }}

        @if(Session::has('error'))
        <div class="alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error !</strong> {{ Session::get('error') }}
        </div>
        @endif
        <h2 class="text-center">
            <span class="fa-stack">
              <i class="fa fa-lock fa-stack-1x"></i>
              <i class="fa fa-circle-o-notch fa-stack-2x text-info fa-rotate-90"></i>
            </span>
        </h2>
        <hr>
        {{ BootForm::text('Email', 'email')
                ->placeholder('john.doe@domain.tld')->required() }}

        {{ BootForm::password('Password', 'password')->required()}}


        {{ BootForm::submit('Login')->addClass('btn-block btn-primary') }}

        {{ BootForm::token() }}
        {{ BootForm::close() }}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                Forgot your password ?
                <a href="{{ action('RemindersController@getRemind')}}" class="">Reset it !</a>
            </div>
        </div>
    </div>
</div>

@stop
