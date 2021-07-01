<?php

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

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;



Route::prefix('v1')->group(function () {
    //public
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    // Route::get('books', [BookController::class, 'index']);
    // Route::get('book/{id}', [BookController::class, 'view'])->where('id', '[0-9]+');
    //private
    Route::middleware(['auth:api'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
    }); 
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
   
   
   
   
   
   
   
