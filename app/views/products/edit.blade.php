@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default well">
            <div class="panel-heading">
                <h3 class="panel-title">Edit <b>{{ $product->title }}</b></h3>
            </div>
            <div class="panel-body">

                <hr>
                @include('products.create', ['route' => route('admin.products.update', $product->id), 'method' => 'PUT'])

            </div>
        </div>
    </div>
</div>
@stop
