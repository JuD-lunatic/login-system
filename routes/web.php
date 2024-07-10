<?php
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', function (FormRequest $request) {
    $user = [
        'name' => "camille",
        'password' => "pass",
        'email' => "camille.abang@unc.edu.ph"
    ];
    User::create($user);
    return response([
        "user" => $user
    ]);
});