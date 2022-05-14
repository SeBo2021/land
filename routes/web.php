<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WebChatController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function (){
    return view('index');
});*/
Route::get('/', [IndexController::class,'code']);
//Route::get('/kfChat', [WebChatController::class,'index']);
Route::get('/downloadAndroid', [IndexController::class,'downloadAndroid']);
Route::get('/downloadIosLight', [IndexController::class,'downloadIosLight']);
Route::get('/store', [IndexController::class,'store']);
Route::get('/lightPage', [IndexController::class,'lightPage']);
Route::get('/downloadFast', [IndexController::class,'downloadFast']);
