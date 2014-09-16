{{ BootForm::open()->action($route)->setMethod($method) }}
{{ BootForm::bind($category) }}
    {{ BootForm::text('Name', 'name')}}

    {{ BootForm::token() }}
    {{ BootForm::submit('Save')->addClass('btn btn-success') }}

{{ BootForm::close() }}
