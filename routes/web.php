<?php

use App\Models\contact;
use App\Http\Controllers\Customlogin;
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
    return view('index');
});

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/about', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/coming', function () {
    return view('comingsoon');
});
Route::get('/myaccount', function () {
    return view('myaccount');
});
Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/playnow', function () {
    return view('playnow');
});

Route::post('/register',[Customlogin::class,('insert_register')]);
Route::post('/login',[Customlogin::class,('loginmatch')]);
Route::post('/contactus',[contact::class,('insert_contaactus')]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
