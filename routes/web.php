<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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


Route::resource("/admin/user", UserController::class);
Route::resource("/admin/blogs", BlogController::class);
Route::resource("/admin", PageController::class);


//Route::controller(BlogController::class)->group(function () {
//    Route::get('/admin/blogs', 'index');
//});
