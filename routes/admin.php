<?php
use Illuminate\Support\Facedes\Route;

Route::middleware(['auth','perfil:admin'])->group(function(){

    Route::get('/admin/dashboard');

   });

});
