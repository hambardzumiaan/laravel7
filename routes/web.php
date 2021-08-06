<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

use App\Http\Controllers\UsersController;

use App\Http\Controllers\CountriesController;

use App\Http\Controllers\CarsController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PostsController;

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

//Route::get('/', "ProductController@index");

Route::get('/', [ProductsController::class, 'index']);

Route::get('/users', [UsersController::class, 'index']);

Route::get('/countries', [CountriesController::class, 'index'])->name('countries.index');

Route::get('/countries/create', [CountriesController::class, 'create']);
Route::post('/countries/create', [CountriesController::class, 'store']);

Route::get('/countries/edit/{id}', [CountriesController::class, 'edit'])->name('countries.edit');
Route::post('/countries/edit/{id}', [CountriesController::class, 'update']);

Route::post('/countries/delete/{id}', [CountriesController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/admin", [AdminController::class, 'index'])->middleware(["auth"])->middleware(["auth", "admin"]);



Route::prefix('/cars')->name('cars.')->group(function () {

	Route::get('/', [CarsController::class, 'index'])->name('index');

	Route::get('/create', [CarsController::class, 'create'])->name('create');
	Route::post('/create', [CarsController::class, 'store']);

	Route::get('/edit/{id}', [CarsController::class, 'edit'])->name('edit');
	Route::post('/edit/{id}', [CarsController::class, 'update']);

	Route::post('/delete/{id}', [CarsController::class, 'delete']);

});



Route::get('/posts', [PostsController::class, 'index'])->name('index');