<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return Inertia::render('Inicio');
});

Route::get('/contacto', function(){
    return Inertia::render('Contacto');
});