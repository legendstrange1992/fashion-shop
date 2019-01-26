<?php


Route::get('/','Mycontroller@index');

Route::get('tang-san-pham/{id}/{sl}/{color}/{size}','Mycontroller@tangsoluong');
