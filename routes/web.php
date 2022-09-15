<?php



use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PageController;

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

Route::resource("/admin/blogs", BlogController::class);
Route::resource("/admin/user", UserController::class);


Route::controller(BlogController::class)->group(function () {
    Route::get('/admin/blogs/{blog}', 'destroy');
});
Route::controller(PageController::class)->group(function () {
    Route::get('/admin', 'index');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('/admin/contacts', 'edit');
});
Route::controller(ContactController::class)->group(function () {
    Route::put('/admin/contacts', 'update');
});

