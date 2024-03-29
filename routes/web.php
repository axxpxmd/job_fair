<?php

use Illuminate\Support\Facades\Route;

//* Livewire Component
use App\Http\Livewire\Login;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\Register;
use App\Http\Livewire\ResetPassword;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/reset-password', ResetPassword::class)->name('resetPassword');

Route::get('/', Homepage::class)->name('home-page');
