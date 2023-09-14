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

use App\Http\Controllers\SettingController;

Auth::routes();

Route::get('/dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//website
Route::resource('settings',SettingController::class);
Route::resource('slider',\App\Http\Controllers\SliderController::class);
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('messages',\App\Http\Controllers\MessageController::class);
Route::resource('message-category',\App\Http\Controllers\MessageCategoryController::class);
Route::resource('circulars',\App\Http\Controllers\CircularController::class);
Route::resource('marquees',\App\Http\Controllers\MarqueeController::class);
Route::resource('documents',\App\Http\Controllers\DocumentController::class);

//gallery
Route::resource('photo-categories',\App\Http\Controllers\PhotoCategoryController::class);
Route::resource('photo-galleries',\App\Http\Controllers\PhotoGalleryController::class);
Route::resource('video-categories',\App\Http\Controllers\VideoCategoryController::class);
Route::resource('video-galleries',\App\Http\Controllers\VideoGalleryController::class);

//employee
Route::resource('teachers',\App\Http\Controllers\TeacherController::class);
Route::resource('managements',\App\Http\Controllers\ManagementController::class);


//configurations
Route::resource('blood-groups',\App\Http\Controllers\BloodGroupController::class);
Route::resource('designations',\App\Http\Controllers\DesignationController::class);
Route::resource('religions',\App\Http\Controllers\ReligionController::class);
Route::resource('subjects',\App\Http\Controllers\SubjectController::class);
Route::resource('management-categories',\App\Http\Controllers\ManagementCategoryController::class);



Route::get('website-post/{id}',[\App\Http\Controllers\DocumentController::class,'post'])->name('website.post');

