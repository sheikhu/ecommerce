{{ BootForm::open()->action($route)->multipart()->setMethod($method) }}
{{ BootForm::bind($product) }}


<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        {{ BootForm::text('Title', 'title') }}
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        {{ BootForm::text('Price', 'price') }}
    </div>


    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        {{ BootForm::select('Category', 'category_id')->options(Category::lists('name', 'id')) }}
    </div>
</div>

{{ BootForm::textarea('Description', 'description') }}

{{ BootForm::file('Image', 'image')}}


{{ BootForm::radio('In stock', 'available', 1) }}
{{ BootForm::radio('Out of stock', 'available', 0) }}


{{ BootForm::token() }}
{{ BootForm::submit('Save')->addClass('btn btn-success') }}
{{ BootForm::close()}}
