<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('tree', 'TreeController@registerTree');
    Route::post('tree/user', 'TreeController@setUserDiscoveredTree');
    Route::get('user/trees', 'userController@getUserDiscoveredTrees');
    Route::post('tree/comment', 'CommentController@addTreeComment');
});

Route::get('trees-number', 'TreeController@getTrees');
Route::get('code', 'TreeController@getTreeByCode');
Route::get('tree/comments', 'TreeController@getTreeComments');
Route::get('user/comments', 'UserController@getUserComments');

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