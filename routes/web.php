<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);
