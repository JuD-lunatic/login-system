<?php

use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login']);