<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers;


Route::get('/add','App\Http\Controllers\MusaController@add')->name('add');
Route::post('/add','App\Http\Controllers\MusaController@add')->name('add');
Route::get('/getOne/{id}','App\Http\Controllers\MusaController@updateForm')->name('getOne');
Route::put('/update/{id}','App\Http\Controllers\MusaController@update')->name('update');
Route::delete('/delete/{id}','App\Http\Controllers\MusaController@destroy')->name('delete');
