<?php

use App\Http\Controllers\{HomeController, ContactController, ProfileInformationController, TaskController};
use Illuminate\Support\Facades\Route;


Route::get("/", HomeController::class);

Route::get("/contact", [ContactController::class, "create"]);
Route::post("/contact", [ContactController::class, "store"]);

Route::get("profile/{identifier}", ProfileInformationController::class);

Route::get("tasks", [TaskController::class, "index"]);
Route::post("tasks", [TaskController::class, "store"]);
Route::get("tasks/{id}/edit", [TaskController::class, "edit"]);
Route::put("tasks/{id}", [TaskController::class, "update"]);
Route::delete("tasks/{id}", [TaskController::class, "destroy"]);
