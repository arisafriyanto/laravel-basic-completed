<?php

use Illuminate\Support\Facades\Route;

Route::get("/", fn () => view("home")); // 7.4

Route::view("/contact", "contact");
Route::view("about", "about");
Route::view("profile", "profile");
