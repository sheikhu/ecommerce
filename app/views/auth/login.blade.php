@extends('layout')


@section('container')

<div class="row">
    <div class="well well-lg col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">


        {{ BootForm::open()->action(route('login'))->addClass('login-form') }}
        <div class="alert alert-success fade in" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success !</strong>
        </div>
        <div class="alert alert-danger fade in" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error !</strong>
        </div>
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


      <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

              {{ BootForm::submit('Login')->addClass('btn-block btn-primary') }}
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <div class="spinner" style="display:none"></div>
          </div>
      </div>

      {{ BootForm::token() }}
      {{ BootForm::close() }}

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a href="{{ action('RemindersController@getRemind')}}" class="">
                Forgot your password ?
            </a>
        </div>
    </div>
</div>
</div>

@stop

@section('scripts')
    @parent

    <script>

    $(function(){

        $('.login-form').on('submit', function(e) {

            e.preventDefault();

            $('.spinner').fadeIn();

            var data = $(this).serializeArray();

            var login_url = "{{ route('login') }}";

            $.post(login_url, data, function (json) {
                if(json.status == "success")
                {
                    $('.alert-success').fadeIn().append(json.message);
                    window.location.replace(json.redirect);
                }
                else
                {
                    $('.alert-danger').fadeIn().append(json.message);
                }

                $('.spinner').fadeOut();
            });

        });
    });
    </script>
@stop
