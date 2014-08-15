<!DOCTYPE html>
<html>
<head>
    <title>App</title>

    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/app.css') }}
</head>
<body>
<div class="container">
@section('top')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        {{ link_to_route('homepage', 'Acme', [], ['class' => 'navbar-brand'])}}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        @if(Auth::guest() && !Route::is('login'))
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @endif

        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ Auth::user() }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li>{{ link_to('logout', _('Change Password'))}}</li>
                    <li>{{ link_to('logout', _('Logout')) }}</li>
                </ul>
            </li>
        </ul>
        @endif
    </div><!-- /.navbar-collapse -->
</nav>


@show

@yield('container')
</div>

@section('scripts')
    {{ HTML::script('js/jquery.min.js')}}
    {{ HTML::script('js/bootstrap.min.js')}}
@show
</body>
</html>
