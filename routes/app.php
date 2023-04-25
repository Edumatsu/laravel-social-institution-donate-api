<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1/app', 'namespace' => 'App\Http\Controllers\v1\App'], function () {
    Route::post('auth', 'AuthController@login');
    Route::post('register', 'AuthController@create');

    Route::middleware(['auth.jwt'])->group(function () {
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'AuthController@me');
            Route::post('/', 'AuthController@update');
        });

        Route::group(['prefix' => 'users'], function() {
            Route::get('/{user}', 'UserController@show');
            Route::get('/{user}/following', 'UserController@userIsFollowing');
            Route::get('/{user}/followers', 'UserController@followTheUser');
            Route::post('/{user}/follow/toggle', 'UserController@toggleFollow');
            Route::post('/exists', 'UserController@exists');
        });

        Route::group(['prefix' => 'favorites'], function() {
            Route::get('/{user}', 'FavoriteController@index');
            Route::post('/{institution}/toggle', 'FavoriteController@toggle');
        });

        Route::group(['prefix' => 'activities'], function() {
            Route::get('/', 'ActivityController@index');
        });

        Route::group(['prefix' => 'donations'], function() {
            Route::post('/', 'DonationController@create');
        });
    });

    Route::middleware(['auth.jwt.optional'])->group(function () {
        Route::group(['prefix' => 'institutions'], function() {
            Route::get('/', 'InstitutionController@index');
            Route::get('/{institution}', 'InstitutionController@show');
        });

        Route::get('/recommendation/random', 'RecommendedInstitutionController@random');

        Route::group(['prefix' => 'settings'], function() {
            Route::get('/', 'SettingController@show');
        });
    });

    Route::middleware(['auth.mercadopago'])->group(function () {
        Route::group(['prefix' => 'donations'], function() {
            Route::post('/update', 'DonationController@update');
        });
    });
});
