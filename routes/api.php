<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\NoticesController;
use App\Http\Controllers\Api\UserController;



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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(NoticesController::class)->group(function(){

 Route::get('/notices', 'index');
 Route::post('/notices', 'store');
 Route::get('/notices/{id}', 'show');
 Route::put('/notices/{id}', 'update');
 Route::delete('/notices/{id}', 'destroy');

});
Route::controller(UserController::class)->group(function(){

 Route::get('/users', 'index');
 Route::post('/users', 'store');
 Route::get('/users/{id}', 'show');
 Route::post('/users/auth', 'authUser');
 Route::put('/users/{id}', 'update');


});