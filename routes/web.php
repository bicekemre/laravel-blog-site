<?php


use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
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

Route::get('/', [PageController::class, 'show']);
Route::get('/blogs', [BlogController::class, 'show']);
Route::get('/blogs/{blog}/sight', [BlogController::class, 'sight']);
Route::get('/resume', [ResumeController::class, 'show']);
Route::get('/projects', [ProjectController::class, 'show']);
Route::get('/projects/{project}/sight', [ProjectController::class, 'sight']);
Route::get('/contact', [ContactController::class, 'show']);
Route::get('/blogs/{blog}/comment/create', [CommentController::class, 'store']);
Route::get('/contact/create/message', [MessageController::class, 'store']);
Route::get('/download', [PageController::class, 'getDownload']);
Route::view('/about', 'visitor.about.index');


Route::get(
    '/admin/login',
    [PageController::class, 'loginForm']
)->name('login');
Route::post('admin/login' ,[PageController::class, 'login']);
Route::get('/admin/logout' ,[PageController::class, 'logout']);

Route::get("/admin/forget-password", [UserController::class, 'passwordForm']);
Route::get("/admin/creat-validation", [UserController::class, 'validation']);
Route::post("/admin/forget-password", [UserController::class, 'changePassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource("/admin/user", UserController::class);
    Route::resource("/admin/resume", ResumeController::class);
    Route::resource("/admin/blogs", BlogController::class);
    Route::resource("/admin/projects", ProjectController::class);
    Route::get("/admin/projects/{project}",  [ProjectController::class, 'destroy']);



    Route::controller(ContentController::class)->group(function () {
        Route::get('/admin/contents', 'index');
        Route::get('/admin/contents/home', 'showHome');
        Route::get('/admin/contents/blogs', 'showBlog');
        Route::get('/admin/contents/projects', 'showProjects');
        Route::get('/admin/contents/about', 'showAbout');
        Route::get('/admin/contents/contact', 'showContact');
        Route::get('/admin/contents/resume', 'showResume');
        Route::put('/admin/contents/update', 'update');
    });

    Route::controller(MessageController::class)->group(function () {
        Route::get('/admin/messages', 'index');
    });

    Route::controller(CommentController::class)->group(function () {
        Route::get('/admin/blogs/{blog}/comments', 'index');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/user/{user}', 'destroy');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blogs/{blog}', 'destroy');
    });

    Route::controller(ResumeController::class)->group(function () {
        Route::get('/admin/resume/{resume}', 'destroy');
    });

    Route::controller(PageController::class)->group(function () {
        Route::get('/admin', 'index');

    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/admin/contacts', 'edit');
        Route::put('/admin/contacts', 'update');
        Route::post('/admin/contacts/create', 'create');
    });

});



