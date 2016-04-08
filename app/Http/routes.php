<?php

/** Web Routes */
Route::group(['middleware' => ['web']], function () {

    /** Pages */
    Route::get('/', 'PagesController@index');

    /** Past group */
    Route::group(['prefix' => 'past'], function() {
        Route::get('/', 'PagesController@past');
    });

    /** Present group */
    Route::group(['prefix' => 'present'], function() {
        Route::get('/', 'PagesController@present');
    });

    /** Present group */
    Route::group(['prefix' => 'history'], function() {
        Route::get('/', 'PagesController@history');
    });

    /** Future group */
    Route::group(['prefix' => 'future'], function() {
        Route::get('/', 'PagesController@future');
    });

    Route::get('/contact', 'PagesController@contact');

    Route::get('/about', 'PagesController@about');

});
