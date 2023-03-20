<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/work', [App\Http\Controllers\HomeController::class, 'work'])->name('work');
Route::get('/hiredev', [App\Http\Controllers\HomeController::class, 'hiredev'])->name('hiredev');
Route::get('/hiredevform', [App\Http\Controllers\HomeController::class, 'hiredevform'])->name('hiredevform');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read'])->name('read');
Route::post('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::post('/hiredevpost', [App\Http\Controllers\HomeController::class, 'hiredevpost'])->name('hiredevpost');


Auth::routes();

Route::group(['middleware' => ['IsAdmin']], function(){

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::get('/requests', [App\Http\Controllers\AdminController::class, 'requests'])->name('requests');
    Route::post('/admin', [App\Http\Controllers\AdminController::class, 'postset'])->name('postset');
    Route::get('/adminblog', [App\Http\Controllers\AdminController::class, 'adminblog'])->name('adminblog');
    Route::post('/admincreateblog', [App\Http\Controllers\AdminController::class, 'admincreateblog'])->name('admincreateblog');
    Route::post('/createcategory', [App\Http\Controllers\AdminController::class, 'createcategory'])->name('createcategory');

    Route::get('/devservices', [App\Http\Controllers\AdminController::class, 'devservices'])->name('devservices');
    Route::get('/hiredevreqs', [App\Http\Controllers\AdminController::class, 'hiredevreqs'])->name('hiredevreqs');
    Route::get('/compwork', [App\Http\Controllers\AdminController::class, 'compwork'])->name('compwork');
    Route::post('/admincreateservice', [App\Http\Controllers\AdminController::class, 'admincreateservice'])->name('admincreateservice');
    Route::post('/compworkpost', [App\Http\Controllers\AdminController::class, 'compworkpost'])->name('compworkpost');
    Route::get('/deletework/{id}', [App\Http\Controllers\AdminController::class, 'deletework'])->name('deletework');
    Route::get('/deletehiredevreqs/{id}', [App\Http\Controllers\AdminController::class, 'deletehiredevreqs'])->name('deletehiredevreqs');
    Route::get('/deleteblog/{id}', [App\Http\Controllers\AdminController::class, 'deleteblog'])->name('deleteblog');
    Route::get('/markreqs/{id}', [App\Http\Controllers\AdminController::class, 'markreqs'])->name('markreqs');




});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
