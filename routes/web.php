<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\{HomeController, ContactController, LoginController, ProfileInformationController, RegistrationController, TaskController, UserController};


Route::get("/", HomeController::class);


Route::get("users", [UserController::class, "index"])->name("users.index");
Route::get("users/{user:username}", [UserController::class, "show"])->name("users.show");

Route::middleware('auth')->group(function () {
    Route::resource("tasks", TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store'])->name('register');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']); //! valid jika ingin panggil name route di form nya
});
