<?php

use App\Http\Controllers\GreetingController;
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
/*
Route::get('/', function () {
    return view('Pages/index');
});
*/
Route::get('/', [GreetingController::class, 'show']);
Route::get('/', [GreetingController::class, 'index']);

