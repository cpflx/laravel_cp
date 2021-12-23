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

Route::group(['prefix' => 'v1'], function ($q) {
    //不需要验证auth
    Route::get('/register', 'api\v1\RegisterController@register');

    //需要验证auth
    $q->group(['middleware'=>['auth.api']],function (){
        Route::get('/index', 'api\v1\IndexController@index');
    });


});

