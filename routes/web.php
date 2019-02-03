<?php


Route::get('/','Mycontroller@index')->name('trangchu');

Route::get('add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@addtocard');
Route::get('cart',['as'=>'cart','uses'=>'Cartcontroller@cart']);
Route::get('update-quantity/{id}/{style}/{soluongmoi}','Cartcontroller@update_soluong');
