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

use Illuminate\Support\Facades\Artisan;

Route::get('/cmd-198185541913514', function () {

    Artisan::call('migrate:refresh', [
        '--seed' => true,
    ]);

    return "done";
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
