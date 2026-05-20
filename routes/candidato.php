<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'candidato'])->group(function () {

    Route::get('/candidato/dashboard', function () {
        return view('candidato.dashboard');
    });

});
