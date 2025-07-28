<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);

//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
