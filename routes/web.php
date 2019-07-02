<?php

Route::group(['namespace' => 'Msi\Falcon\Http\Controllers'], function() {
    Route::get('msi/helper', ['uses' => 'HelperController@index']);
});
