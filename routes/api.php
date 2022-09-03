<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['api','lang'],'namespace' => 'Api'], function () {


    Route::group(['namespace' => 'Category'], function () {
        // Category////////
        Route::group([ 'prefix' => 'categories'], function () {
            // index
            Route::get('/', 'CategoryController@index');
            // create
            Route::post('/', 'CategoryController@store');
            // get
            Route::get('{Category}', 'CategoryController@get');
            // update
            Route::put('{Category}', 'CategoryController@update');
            // delete
            Route::delete('bulkDelete', 'CategoryController@bulkDelete');
            Route::post('bulkRestore', 'CategoryController@bulkRestore');
        });
    });
});




