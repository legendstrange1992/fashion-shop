<?php


Route::get('/','Mycontroller@index')->name('trangchu');




Route::get('add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@addtocard');
Route::get('cart',['as'=>'cart','uses'=>'Cartcontroller@cart']);
Route::get('update-quantity/{id}/{style}/{soluongmoi}','Cartcontroller@update_soluong');
Route::get('delete-cart',['as'=>'delete_cart','uses'=>'Cartcontroller@delete_cart']);
Route::get('delete-item-cart/{id}/{style}','Cartcontroller@delete_item_cart');


Route::get('check-out','Cartcontroller@checkout')->name('checkout');
Route::post('oder-complete','Cartcontroller@oder_complete')->name('ordercomplete');