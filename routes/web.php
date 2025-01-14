<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::get('dashboard', [HomeController::class, 'index'])->name('home');
Route::resource('courses', CourseController::class);
Route::get('login', function () {
    return view('login');
});
Route::post('login', [App\Http\Controllers\loginController::class, 'login']);

Route::get('signup', function () {
    return view('signup');
});

Route::post('signup', [App\Http\Controllers\signupController::class, 'register']);

Route::get('login', function () {
    return view('login');
});

Route::post('login', [AuthController::class, 'login']);

Route::get('signup', function () {
    return view('signup');
});

Route::post('signup', [AuthController::class, 'register']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('courses', CourseController::class);
});

Route::get('dashboard2', function () {
    return view('dashboard2'); // Halaman Dashboard setelah login
})->middleware(['auth'])->name('dashboard2');

Route::get('tables', function () {
    return view('tables');
});

Route::get('kursus1', function () {
    return view('kursus1');
});

Route::get('kursus2', function () {
    return view('kursus2');
});

Route::get('charts', function () {
    return view('charts');
});

Route::get('utilities-animation', function () {
    return view('utilities-animation');
});

Route::get('utilities-border', function () {
    return view('utilities-border');
});

Route::get('utilities-color', function () {
    return view('utilities-color');
});

Route::get('utilities-other', function () {
    return view('utilities-other');
});