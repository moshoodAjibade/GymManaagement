<?php

use App\Http\Controllers\Admin\TrainerController;
//use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegistration;
use App\Models\Admin;

Route::get('/', function () {
    return view('index');
});

Route::get('/tailwind', function () {
    return view('tailwind');
});

Route::get('/validate/register', [UserRegistration::class, 'userReg'])->name('validate.register');
Route::post('/validate/register', [UserRegistration::class, 'submitUser']);

//Route::get('/login', 'UserController@login')->name('login');
// Route to show the contact form

Route::get('/login', [UserController::class, 'logincreate'])->name('user.login');
Route::post('/login', [UserController::class, 'loginstore']);

// Route to show the contact form
Route::get('/contact', [UserController::class, 'showForm'])->name('contact.form');

// Route to handle form submission
Route::post('/contact', [UserController::class, 'submitForm'])->name('contact.submit');

Route::get('/signup', function () {
    return view('signup');
});


/*** Route::get('/admin/index', [Admin/AdminController::class, 'index']);
    Route::get('admin/trainers/', [Admin/TrainerController::class, 'index']);
    //Route::any('/admin/reservations', ReservationController::class);

    Route::get('admin.')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::any('admin/trainers/', [TrainerController::class, 'index']);
    });
 */



//require __DIR__ . '/auth.php';

