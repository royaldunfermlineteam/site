<?php

/** Web Routes */
Route::group(['middleware' => ['web']], function () {

    /** Pages */
    Route::get('/', 'PagesController@index');

    /** Past group */
    Route::group(['prefix' => 'past'], function() {
        Route::get('/', 'PastController@index');
    });

    /** Present group */
    Route::group(['prefix' => 'present'], function() {
        Route::get('/', 'PresentController@index');

    });

    /** Future group */
    Route::group(['prefix' => 'future'], function() {
        Route::get('/', 'FutureController@index');
    });
});
