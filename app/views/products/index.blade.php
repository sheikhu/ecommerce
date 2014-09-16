@extends('admin.layout')

@section('content')


<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h1>Products</h1>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @foreach (array_chunk($products->all(), 3) as $pack)

        <div class="row">
            @foreach ($pack as $p)
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="well">
                    <h4>
                        {{ $p->title }}
                    </h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="#">
                                {{HTML::image($p->image, null, ['class' => 'img-responsive thumbnail']) }}
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <b>Price:</b> {{ $p->price}}
                        </div>
                        <div>
                            <a href="{{ route('admin.products.edit', $p->id) }}">
                            Edit
                            </a>
                        </div>
                    </div>
                    <hr>

                    {{ BootForm::open()->action(route('admin.products.destroy', $p->id))->delete()
                }}

                {{ BootForm::submit('Delete')->addClass('btn btn-danger btn-sm') }}
                {{ BootForm::close()}}
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

</div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default well">
            <div class="panel-heading">
                <h3 class="panel-title">Create new product</h3>
            </div>
            <div class="panel-body">

                <hr>
                @include('products.create', ['route' => route('admin.products.store'), 'method' => 'POST'])

            </div>
        </div>
    </div>
</div>
@stop
