{{ BootForm::open()->action(route('admin.categories.store')) }}

    {{ BootForm::text('Name', 'name')}}

    {{ BootForm::token() }}
    {{ BootForm::submit('Create')->addClass('btn btn-success') }}

{{ BootForm::close() }}
