<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'v1/backoffice', 'namespace' => 'App\Http\Controllers\v1\Backoffice'], function () {
    Route::post('auth', 'AuthController@login');

    Route::middleware(['auth.jwt'])->group(function () {
        Route::group(['prefix' => 'institutions'], function() {
            Route::get('/', 'InstitutionController@index');
            Route::post('/', 'InstitutionController@store');
            Route::get('/{institution}', 'InstitutionController@show');
            Route::post('/{institution}', 'InstitutionController@update');
            Route::delete('/{institution}', 'InstitutionController@destroy');
        });

        Route::group(['prefix' => 'categories'], function() {
            Route::get('/', 'CategoryController@index');
            Route::get('/{category}', 'CategoryController@show');
            Route::post('/', 'CategoryController@store');
            Route::put('/{category}', 'CategoryController@update');
            Route::delete('/{category}', 'CategoryController@destroy');
        });

        Route::group(['prefix' => 'settings'], function() {
            Route::get('/', 'SettingController@index');
            Route::get('/{setting}', 'SettingController@show');
            Route::put('/{setting}', 'SettingController@update');
        });

        Route::group(['prefix' => 'recommendations'], function() {
            Route::get('/', 'RecommendedInstitutionController@index');
            Route::get('/{recommendedInstitution}', 'RecommendedInstitutionController@show');
            Route::post('/', 'RecommendedInstitutionController@store');
            Route::put('/{recommendedInstitution}', 'RecommendedInstitutionController@update');
            Route::delete('/{recommendedInstitution}', 'RecommendedInstitutionController@destroy');
        });

        Route::get('/dashboard', 'DashboardController@index');
    });
});
