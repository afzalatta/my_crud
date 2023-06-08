<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\Apicontroller;
use App\Http\Controllers\TeacherController;
use App\Models\Player;



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

Route::get('/', function () {

    return view('welcome');
});


Route::view('crud', 'employee');
Route::resource('students', StudentController::class);
/*=============Prefix Practice============
Route::prefix('admin')->group(function(){
        Route::get('create', function(){
            return "Create Admin";
        });
        Route::get('delete', function(){
            return "Delete Admin";
        });
});

Route::fallback(function(){
    return view('welcome');
});
*/
Route::get('devices/{name}',[PracticeController::class, 'show'])->where('name', '[a-z]+')
->middleware(['throttle:afzal']);

Route::get('list',[PracticeController::class, 'dbOperations']);

Route::get("school/{id}",[PracticeController::class, 'institute']);

Route::get('api', [Apicontroller::class, 'getData']);

// Route::fallback(function(){
//     return "Route not found";
// });

Route::prefix('relationship')->group(function () {
    Route::get('/manytomany',[TeacherController::class,'teacherStudent']);
    Route::get('/onetomany',[TeacherController::class,'teacherClass']);
});

//Route::get('')
use App\Models\User;

Route::get('/players/{player}', function (Player $player) {
    return $player;
});
