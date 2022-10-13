<?php


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
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

Route::get(
    '/admin/login',
    [PageController::class, 'loginForm']
)->name('login');
Route::post('admin/login' ,[PageController::class, 'login']);
Route::get('admin/logout' ,[PageController::class, 'logout']);

Route::get("/admin/forget-password", [UserController::class, 'passwordForm']);
Route::get("/admin/creat-validation", [UserController::class, 'validation']);
Route::post("/admin/forget-password", [UserController::class, 'changePassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource("/admin/user", UserController::class);
    Route::resource("/admin/resume", ResumeController::class);
    Route::resource("/admin/blogs", BlogController::class);
    Route::resource("/admin/projects", ProjectController::class);



    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projects', 'show');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/user/{user}', 'destroy');
    });
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blogs/{blog}', 'destroy');
        Route::get('/blogs', 'show');
    });
    Route::controller(ResumeController::class)->group(function () {
        Route::get('/admin/resume/{resume}', 'destroy');
        Route::get('/resume', 'show');
    });
    Route::controller(PageController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/', 'show');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('/admin/contacts', 'edit');
        Route::put('/admin/contacts', 'update');
        Route::post('/admin/contacts/create', 'create');
        Route::get('/contacts', 'show');
    });
});



