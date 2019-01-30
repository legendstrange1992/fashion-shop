<?php


Route::get('/','Mycontroller@index')->name('trangchu');

Route::get('add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@addtocard');
Route::get('cart',['as'=>'cart','uses'=>'Cartcontroller@cart']);

Route::get('tang-so-luong/{id}/{style}',['as'=>'tangsoluong','uses'=>'Cartcontroller@tangsoluong']);
Route::get('giam-so-luong/{id}/{style}',['as'=>'tangsoluong','uses'=>'Cartcontroller@giamsoluong']);
