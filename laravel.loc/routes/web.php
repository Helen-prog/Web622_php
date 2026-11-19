<?php

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

Route::view("/", 'test.hi', ['title' => 'Main page']);

Route::get("/posts/{id}", function($id){
    return "Post ID: $id";
});

