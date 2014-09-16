<?php

class Category extends \Eloquent {

	// Add your validation rules here
	public $rules = [
		'name' => 'required|min:3'
	];

	// Don't forget to fill this array
	protected $fillable = ['name'];


    public function products()
    {
        return $this->hasMany('Product');
    }

    public function __toString()
    {
        return $this->name;
    }

    public static function boot()
    {
        parent::boot();

        Category::creating(function($c){

            $c->slug = Str::slug($c->name);
        });
    }

}
