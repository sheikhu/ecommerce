<?php

Route::group(['prefix' => 'admin'], function(){

    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
});

?>
