<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\productscontroller;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/add-categories', function () {
    return view('add-categories');
});

Route::post('/add-categories',[categoriescontroller::class,'Adddata']);
Route::get('delete/{id}', [categoriescontroller::class,'delete']);


Route::get('/add-products', function () {
    return view('add-products');
});


Route::post('/add-products',[productscontroller::class,'Adddata']);

Route::get('/products', function () {
    return view('products');

});

Route::get('deleteproduct/{id}', [productscontroller::class,'delete']);


Route::get('/products', [productscontroller::class,'view']);


Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories', [categoriescontroller::class,'view']);