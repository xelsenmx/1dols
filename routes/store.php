<?php

use App\Http\Livewire\Store\Login;
use App\Http\Livewire\Store\Register;
use \Illuminate\Support\Facades\Route;


Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
