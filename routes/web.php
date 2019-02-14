<?php


Route::get('/','Mycontroller@index')->name('trangchu');




Route::get('add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@addtocard');
Route::get('search-product-add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@search_product_addtocard');
Route::get('cart',['as'=>'cart','uses'=>'Cartcontroller@cart']);
Route::get('update-quantity/{id}/{style}/{soluongmoi}','Cartcontroller@update_soluong');
Route::get('delete-cart',['as'=>'delete_cart','uses'=>'Cartcontroller@delete_cart']);
Route::get('delete-item-cart/{id}/{style}','Cartcontroller@delete_item_cart');


Route::get('check-out','Cartcontroller@checkout')->name('checkout');
Route::post('oder-complete','Cartcontroller@oder_complete')->name('ordercomplete');

Route::get('MEN','Mycontroller@men')->name('MEN');
Route::get('WOMEN','Mycontroller@women')->name('WOMEN');
Route::get('BAG','Mycontroller@bag')->name('BAG');

Route::post('search','Mycontroller@search')->name('search');