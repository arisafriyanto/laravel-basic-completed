<?php

use Illuminate\Support\Facades\Route;

Route::get("/", fn () => view("home")); // 7.4
// Route::get("/", fn () => dd(asset("css/app.css"))); // 7.4

Route::view("/contact", "contact");

Route::get("posts/first-post", function () {
    return view("posts.first-post");
});
