<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return '<h1>Hello world!</h1>';
// });

// Route::get('/test', function(){
//     return '<h1>Hello TEST!</h1>';
// });

// Route::get('/', function () {
//     return view('hi', ['title' => 'Main page']);
// });

// Route::view("/", 'test.hi', ['title' => 'Main page']);

// Route::get("/posts/{id?}", function($id = 1){
//     return "Post ID: $id";
// });
// Route::get("/posts/{id}", function($id){
//     return "Post ID: $id";
// })->where(['id' => '[0-9]+']);

// Route::get("/posts/{id}", function($id){
//     return "Post ID: $id";
// });

// Route::get("/posts/{slug}", function($slug){
//     return "Post SLUG: $slug";
// });

// Route::fallback(function(){
//     // return "Страница не найдена";
//     return response("Страница не найдена", 404);
// });


Route::get("/", [MainController::class, 'index'])->name('main.index');
Route::get("/test", [MainController::class, 'test'])->name('main.test');
Route::get("/contact", [MainController::class, 'contact'])->name('main.contact');

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//     Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// });
