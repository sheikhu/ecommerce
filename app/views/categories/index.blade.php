@extends('admin.layout')

@section('content')


<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h1>Categories</h1>
    </div>
</div>
<div class="row">
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        @foreach (array_chunk($categories->all(), 3) as $pack)

        <div class="row">
            @foreach ($pack as $c)
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="well">
                    <h5>
                        {{ $c }}
                        <small>
                            <a href="{{ route('admin.categories.edit', $c->id) }}">
                                Edit
                            </a>

                        </small>
                    </h5>
                    <hr>

                    {{ BootForm::open()->action(route('admin.categories.destroy', $c->id))->delete()
                    }}

                    {{ BootForm::submit('Delete')->addClass('btn btn-danger btn-sm') }}
                    {{ BootForm::close()}}
                </div>
            </div>
            @endforeach
        </div>
        @endforeach

    </div>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h4>Create new category</h4>
        <hr>
        @include('categories.form', ['route' => route('admin.categories.store'), 'method' => 'POST'])
    </div>
</div>
@stop
