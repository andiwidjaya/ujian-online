<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TryoutOnline;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/do-tryout/{id}', TryoutOnline::class)->name('do-tryout');
});

Route::get('/login', function() {
    return redirect('admin/login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});
