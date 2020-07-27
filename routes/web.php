<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/')->group(function () {
	Route::get('employes', 'EmployesController@Show')->name('employes.show');
	Route::get('employes/{id}', 'DepartmentsController@Show')->name('department.show');
	Route::get('/upload', 'UploadController@Index')->name('upload.index');
	Route::post('/upload', 'UploadController@Store')->name('upload.store');
	/*Route::get('/reviews', 'UserController@reviewsIndex')->name('cabinet.reviews');*/
});
