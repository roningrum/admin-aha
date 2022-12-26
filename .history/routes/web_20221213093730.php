<?php

use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/','AuthController@dashboard')->middleware('cek_login');


//Route Login
Route::get('login','AuthController@index')->name('login');
Route::post('proses_login','AuthController@proses_login')->name('proses_login');
Route::get ('logout','AuthController@logout')->name('logout');

//Auth
//auth -> admin || editor

Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware'=>['cek_login:admin']], function(){
        Route::get('admin', 'AuthController@dashboard')->name('admin');
     
    });
    // Route::group(['middleware'=>['cek_login:editor']], function(){
    //     Route::get('editor', 'AuthController@dashboard')->name('editor');
    // });
});
Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::resource('posts', '\App\Http\Controllers\DashboardPostController');
    Route::resource('galeri', '\App\Http\Controllers\ImageGalleryController');
    Route::resource('feedback','\App\Http\Controllers\FeedbackController');
});


