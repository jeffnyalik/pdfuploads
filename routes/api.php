<?php

use App\Http\Controllers\files\FileUploadController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/uploads', [FileUploadController::class, 'upload']);
// Route::get('/uploads', [FileUploadController::class, 'getFiles']);

Route::group(['middleware' => 'cors'], function(){
    Route::get('/uploads', [FileUploadController::class, 'getFiles']);
    Route::get('/downloads', [FileUploadController::class, 'downloadFiles']);
});
