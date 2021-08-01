<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
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
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('form', function () {
    return view('form');
})->name("form");

Route::post('form', [FormController::class, 'send'])->name("form_send");


Route::get('users', function () {
    $user = "Josdhn";
    if ($user == "John") {
        return "hi $user";
    } else {
        return "Faild!";
    }
});

/*Route::get('users/{id}/{name}', function ($id, $name) {
    return "Hello user $id -> $name";
});*/

/*Route::get('users/{num1}/{num2}', function ($num1, $num2) {
    return pow($num1, $num2);
});*/


//Categories



Route::prefix('categories')->group(function() {
    Route::get('/new', function() {
        return view('categories.new_category');
    })->name('new_category');

    Route::post('new_category',
        [CategoryController::class, 'add']
    )->name('add_category');

    Route::get('/all', [CategoryController::class, 'all_data'])->name('all');
    Route::get('/all/{id}', [CategoryController::class, 'one_category'])->name('one_category');
    Route::get('all/{id}/delete/', [CategoryController::class, 'delete'])->name('delete_category');
    Route::get('all/{id}/edit/', [CategoryController::class, 'edit'])->name('edit_category');
    Route::post('all/{id}/update/',  [CategoryController::class, 'update'])->name('update_category');
});

Route::resource("posts", PostController::class);
