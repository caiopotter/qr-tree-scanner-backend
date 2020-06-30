<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('trees-number', 'TreeController@getTrees');
    Route::post('tree', 'TreeController@registerTree');
    Route::get('code', 'TreeController@getTreeByCode');
    Route::post('tree/user', 'TreeController@setUserDiscoveredTree');
    Route::get('user/trees', 'userController@getUserDiscoveredTrees');
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});