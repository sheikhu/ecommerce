@extends('layout')

@section('styles')
@parent

{{ HTML::style('bower_components/redactor/redactor/redactor.css') }}
@stop

@section('container')


@if(Session::has('success'))
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <span class="alert alert-success">
                <span class="glyphicon glyphicon-exclamation-sign"></span>{{ Session::get('success') }}
        </span>
    </div>
</div>
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Well done !</h1>
        <p>
            You are authenticated as <span class="label label-info">{{ Sentry::getUser()->email }}</span> !
        </p>
        <p class="redactor">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            <a class="save btn btn-default btn-sm" href="#">Save</a>
        </p>
    </div>
</div>

@stop

@section('scripts')
@parent

{{ HTML::script('bower_components/redactor/redactor/redactor.min.js') }}

<script>
    $('.redactor').redactor();

    $('a.save').on('click', function(e){

        $('.redactor').redactor('destroy');
    });
</script>
@stop
