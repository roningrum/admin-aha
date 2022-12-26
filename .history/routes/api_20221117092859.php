<?php

use App\Http\Controllers\api\BlogController;
use App\Http\Controllers\api\PostsController;
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
// Buat Baca
Route::apiResource('/ambulance-hebat/blog', '\App\Http\Controllers\api\PostsController');
Route::apiResource('/ambulance-hebat/galeri', '\App\Http\Controllers\api\ImagesController');

Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{slug}',[PostsController::class, 'details']);
Route::get('/blog/kategori', [PostsController::class, 'category']);

