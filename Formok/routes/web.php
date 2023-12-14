<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;

Route::get("/pub", [PubController::class, "getForm"]);
Route::post("/submit-drink", [PubController::class, "setDrink"]);
Route::post("/sub-drink", [PubController::class, "submitDrink"]);
Route::post("/su-drink", [PubController::class, "checkDrink"]);