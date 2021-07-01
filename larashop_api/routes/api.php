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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('nama', function () {
//     return 'Namaku, Larashop API';
// });
// Route::post('umur', function () {
//     return 17;
// });
// Route::get('category/{id}', function ($id) {
//     $categories = [
//     1 => 'Programming',
//     2 => 'Desain Grafis',
//     3 => 'Jaringan Komputer',
//     ];
//     $id = (int) $id;
//     if($id==0) return 'Silakan pilih kategori';
//     else return 'Anda memilih kategori <b>'.$categories[$id].'</b>';
// });
// Route::get('book/{id}', function () {
//     return 'buku angka';
// })->where('id', '[0-9]+');
// Route::get('book/{title}', function ($title) {
//     return 'buku abjad';
// })->where('title', '[A-Za-z]+');

//url tanpa label api
// buka file RouteServiceProvider
// hapus  prefix('api') di fungsi mapApiRoutes
// Route::prefix('v1')->group(function () {
//     Route::get('books', function () {
//     // Match dengan "/v1/books"
//     });
//     Route::get('categories', function () {
//     // Match dengan "/v1/categories"
//     });
// });

// Route::domain('{category}.larashop.id')->group(function () {
//     Route::get('book/{id}', function ($category, $id) {
//     //
//     });
// });
// use App\Http\Controllers\BookController;
// Route::get('buku/{judul}', [BookController::class, 'cetak']);
// Route::middleware('throttle:10,1')->group(function () {
//     Route::get('buku/{judul}', [BookController::class, 'cetak']);
// });
// Route::middleware(['cors'])->group(function () {
//         Route::get('buku/{judul}', [BookController::class, 'cetak']);
// });
// Route::middleware(['throttle:10,1', 'cors'])->group(function () {
//     Route::get('buku/{judul}', [BookController::class, 'cetak']);
// });
// Route::middleware(['throttle:10,1'])->group(function () {
//     Route::middleware(['cors'])->group(function () {
//         Route::get('buku/{judul}', [BookController::class, 'cetak']);
//     });
// });


use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
Route::prefix('v1')->group(function () {
    Route::get('books', [BookController::class, 'index']);
    Route::get('book/{id}', [BookController::class, 'view'])->where('id', '[0-9]+');
    Route::post('login', [AuthController::class, 'login']);
    // tambahkan sekalian untuk register dan logout :
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
});
// Route::apiResources([
//     'books' => 'BookController',
//     'categories' => 'CategoryController'
// ]);
   
   
   
   
   
   
