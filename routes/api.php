<?php

use App\Http\Controllers\API\StudentController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*localhost/api/studentというルーティングを生成*/
Route::group(['middleware' => ['api']], function() {
    /*リソースメソッドはGET,POST,PATCH,DELETE等でよく使うルーティングをまとめて生成してくれる*/
    Route::resource('student', StudentController::class);
});