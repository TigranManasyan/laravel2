<?php

use App\Http\Controllers\FormController;
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

Route::get('about', function () {
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
