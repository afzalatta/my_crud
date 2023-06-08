<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserApiController;
use App\Http\Controllers\API\V1\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
 Route::get('v1/users', [UserApiController::class,'index']);
 Route::post('v1/users/create', [UserApiController::class,'userCreate']);
 Route::get('v1/users/list', [UserApiController::class,'userList']);
 Route::post('v1/users/login', [AuthController::class,'login']);
