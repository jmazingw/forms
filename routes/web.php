<?php
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\RegionsController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', [ProvincesController::class, 'index']);