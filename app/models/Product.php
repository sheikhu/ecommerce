<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|min:3',
        'price' => 'required|numeric',
        'category_id' => 'required|integer|exists:categories,id',
        'available' => 'integer',
        'image' => 'image'
	];

	// Don't forget to fill this array
	protected $fillable = [
    'title', 'description', 'price', 'available', 'category_id', 'image'
    ];



    public function category()
    {
        return $this->belongsTo('Category');
    }

    public static function boot()
    {
        parent::boot();

        Product::creating(function($p)
        {
            $p->slug = Str::slug($p->title);

            $image = Input::file('image');

            if( is_null($image) )
                return true;

            $filename = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $path = '/uploads/products/'.$filename;


            Image::make($image->getRealPath())
                    ->resize(120, 120)
                    ->save(public_path(). $path);

            $p->image = $path;

            return true;
        });
    }

}
