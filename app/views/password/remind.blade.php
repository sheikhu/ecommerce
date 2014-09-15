@extends('layout')

@section('top') @stop

@section('container')

<div class="row">
    <div class="well well-lg col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">


        {{ BootForm::open()->action(action('RemindersController@postRemind'))->addClass('login-form') }}

        @if(Session::has('error'))
        <p class="text-center">
            <span class="text-danger text-center">
            {{ Session::get('error') }}
        </span>
        </p>
        @endif
        <h3 class="text-center">Reset Password</h3>
        <hr>
        {{ BootForm::text('Email', 'email')->placeholder('john.doe@domain.tld')->required()}}


        {{ BootForm::submit('Reset')->addClass('btn-block btn-primary') }}

        {{ BootForm::token() }}
        {{ BootForm::close() }}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('login') }}" class="pull-right">Se connecter</a>
            </div>
        </div>
    </div>
</div>

@stop
