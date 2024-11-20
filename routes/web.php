<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
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

Route::prefix('')->controller(WelcomeController::class)->group(function () {
    Route::get('','index')->name("home");
    Route::get('contact','contact')->name("contact");
    Route::post('contact','contactSubmit')->name("contactSubmit");
});

Route::prefix('/posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('','index')->name("index");
    Route::get('/{post}','show')->where(["post" => "[0-9]+"])->name("show");
    Route::get('/create','create')->name("create");
    Route::post('/create','store')->name("store");
    Route::get('/{post}/edit','edit')->name("edit");
    Route::put('/{post}/edit','update')->name("update");
    Route::delete('/{post}','destroy')->where(["post" => "[0-9]+"])->name("destroy");
});

Route::get('/users', function () {
    $users = [
        ['id' => 1, 'nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'jean.dupont@example.com'],
        ['id' => 2, 'nom' => 'Durand', 'prenom' => 'Marie', 'email' => 'marie.durand@example.com'],
        ['id' => 3, 'nom' => 'Martin', 'prenom' => 'Paul', 'email' => 'paul.martin@example.com']
    ];
    return view('users.list', ['users'=>$users]);
})->name("users.index");
