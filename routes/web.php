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

Route::get('/', function () {
    phpinfo();
});
Route::post('/test01',[\App\Http\Controllers\admin\loginController::class,'test01']);
Route::get('/test02',function (){
   return "hello world";
});
//普通的curd
Route::get('/insert',[\App\Http\Controllers\curdController::class,'insert']);
Route::get('/select',[\App\Http\Controllers\curdController::class,'select']);
Route::get('/update',[\App\Http\Controllers\curdController::class,'update']);
Route::get('/delete',[\App\Http\Controllers\curdController::class,'delete']);

//利用model层操作的curd
Route::get('/tSelect',[\App\Http\Controllers\curdController::class,'testSelect']);
Route::get('/tDelete',[\App\Http\Controllers\curdController::class,'testDel']);
Route::get('/tInsert',[\App\Http\Controllers\curdController::class,'testIns']);
