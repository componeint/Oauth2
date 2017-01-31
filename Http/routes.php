<?php

Route::group(['middleware' => 'web', 'prefix' => 'oauth2', 'namespace' => 'App\\Components\Oauth2\Http\Controllers'], function()
{
    Route::get('/', 'Oauth2Controller@index');
});
