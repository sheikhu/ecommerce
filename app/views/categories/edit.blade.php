@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('categories.form', ['route' => route('admin.categories.update', $category->id), 'method' => 'PATCH'])
    </div>
</div>
@stop