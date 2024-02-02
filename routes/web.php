<?php

use Illuminate\Support\Facades\Route;

//* Livewire Component
use App\Http\Livewire\Login;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\Register;

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


Route::get('/', Homepage::class)->name('home-page');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
