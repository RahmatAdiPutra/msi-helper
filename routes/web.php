<?php

Route::get('msi/helper', function () {
    return "Helper";
});

Route::get('msi/helper', 'HelperController@index');
