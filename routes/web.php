<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertDemoController;

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

// 入力画面
Route::get('insert/', [
    InsertDemoController::class,
    'index'
])->name('insert.index');

// 確認画面
Route::post('insert/confirm/', [
    InsertDemoController::class,
    'confirm'
])->name('insert.confirm');

// 完了画面
Route::post('insert/finish', [
    InsertDemoController::class,
    'finish'
])->name('insert.finish');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
