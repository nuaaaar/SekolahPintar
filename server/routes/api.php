<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'api'], function(){

  Route::post('/sign-in', 'ApiAuthController@signIn');

});
