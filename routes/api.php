<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('tree', 'TreeController@registerTree');
    Route::post('tree/user', 'TreeController@setUserDiscoveredTree');
    Route::get('user/trees', 'UserController@getUserDiscoveredTrees');
    Route::post('tree/comment', 'CommentController@addTreeComment');
    Route::delete('tree/comment/{comment}', 'CommentController@deleteTreeComment');
});

Route::get('trees-number', 'TreeController@getTreesNumber');
Route::get('code', 'TreeController@getTreeByCode');
Route::get('tree/short-features', 'TreeController@getTreeShortFeatures');
Route::get('tree/comments', 'TreeController@getTreeComments');
Route::get('user/comments', 'UserController@getUserComments');
Route::get('coords', 'TreeController@getCoord');


Route::group(['prefix' => 'park'], function () {
    Route::get('trees/{park}', 'ParkController@getParkTrees');
    Route::get('/', 'ParkController@getParks');
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