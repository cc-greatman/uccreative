<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    //-- Homepage Route
    Route::get('/', 'FrontendController@index')->name('index.view');
});
