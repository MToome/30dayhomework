<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// view
// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);


