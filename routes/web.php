<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\StudentController;
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


// Route::get('/login',function(){
//     return view('login');
// });

Route::get('/login',[Pagescontroller::class,'login']);
Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/list',[StudentController::class,'list']);
Route::get('/student/get',[StudentController::class,'get']);
Route::get('/student/details',[StudentController::class,'details']);