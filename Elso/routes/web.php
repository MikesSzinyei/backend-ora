<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NezetController;

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

Route::get('/', function () {
    return view('welcome');   
});

// Route::view("/nezet", "nezet");
// Route::view("/enyem", "sajat.enyem" );

Route::get("/nezet", function() {
    //print_r("függvény");
    return view("nezet");
});

Route::get("/sajat", [NezetController::class, "getView" ]);





Route::get("/fuggveny/{id}/{name}", function($id, $name) {

    echo "<h3>Id: </h3>".$id.", ".$name;
}); 