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

Route::get('/', function () {
    return view('website.home');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/message/{id}', [App\Http\Controllers\BasicController::class, 'message'])->name('message.details');
Route::get('/circular/{type}', [App\Http\Controllers\BasicController::class, 'circular'])->name('circular.list');
Route::get('/menu/{type}', [App\Http\Controllers\BasicController::class, 'menuPost'])->name('post.show');
Route::get('/notice/details/{id}', [App\Http\Controllers\BasicController::class, 'details'])->name('notice.details');
Route::get('image/gallery', [App\Http\Controllers\BasicController::class, 'imageGallery'])->name('image.gallery');
Route::get('video/gallery', [App\Http\Controllers\BasicController::class, 'videoGallery'])->name('video.gallery');
Route::get('category/video/{id}', [App\Http\Controllers\BasicController::class, 'videoCategory'])->name('category.video');
Route::get('category/gallery/{id}', [App\Http\Controllers\BasicController::class, 'galleryCategory'])->name('category.gallery');
Route::get('all/notice', [App\Http\Controllers\BasicController::class, 'allNotice'])->name('all.notice');

Route::get('test',function (){
    return view('website.pages.pdf-view');
});
