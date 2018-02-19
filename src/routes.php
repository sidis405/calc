<?php


Route::get('add/{a}/{b}', 'Acme\Calc\CalcController@add');
Route::get('subtract/{a}/{b}', 'Acme\Calc\CalcController@subtract');
Route::get('multiply/{a}/{b}', 'Acme\Calc\CalcController@multiply');
Route::get('divide/{a}/{b}', 'Acme\Calc\CalcController@divide');
