<?php


Route::get('add/{a}/{b}', 'Acme2\Calc\CalcController@add');
Route::get('subtract/{a}/{b}', 'Acme2\Calc\CalcController@subtract');
Route::get('multiply/{a}/{b}', 'Acme2\Calc\CalcController@multiply');
Route::get('divide/{a}/{b}', 'Acme2\Calc\CalcController@divide');
