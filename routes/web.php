<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;


use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forget', function () {
    return view('forget');
})->name('forget');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/create', function () {
//     return view('create');
// })->name('create');

// Route::get('/edit', function () {
//     return view('edit');
// })->name('edit');


// Route to display the form
Route::get('/posts/create', [CreateController::class, 'create'])->name('posts.create');

// Route to handle form submission
Route::post('/posts/create/action', [CreateController::class, 'article'])->name('posts.article');

// Route to display the edit form for a specific post
Route::get('/posts/{id}/edit', [EditController::class, 'edit'])->name('posts.edit');

// Route to handle the form submission to update the post
Route::put('/posts/{id}', [EditController::class, 'update'])->name('posts.update');





