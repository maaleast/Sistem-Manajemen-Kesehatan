<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard Route (tambahkan ini)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Pasien Routes
Route::prefix('pasien')->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    });
    
    Route::get('/periksa', function () {
        return view('pasien.periksa');
    });
    
    Route::get('/riwayat', function () {
        return view('pasien.riwayat');
    });
});

// Dokter Routes
Route::prefix('dokter')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    });
    
    Route::get('/periksa', function () {
        return view('dokter.periksa');
    });
    
    Route::get('/obat', function () {
        return view('dokter.obat');
    });
});