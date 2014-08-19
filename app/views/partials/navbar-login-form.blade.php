@if(Auth::guest() && !Route::is('login'))
    {{ BootForm::open()->action(route('login'))->addClass('navbar-form navbar-right') }}

    {{ BootForm::text('', 'username')->placeholder('Username')}}
    {{ BootForm::password('', 'password')->placeholder('Password')}}

    {{ BootForm::submit('Submit')->addClass('btn btn-default') }}

    {{ BootForm::close() }}
@endif