<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

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

//login route for user get token for authorization
Route::post('/login', [AuthController::class, 'login']);

//authenticate request end points inside the middleware group
//all the end points inside will not be accessed without authentication
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/getUserChats', [ChatController::class, 'getUserChats']);

    Route::get('/getChatDetails', [ChatController::class, 'getChatDetails']);

});
