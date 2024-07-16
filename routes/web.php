<?php
use Inertia\Inertia;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/example', function () {
    return Inertia::render('Example', ['message' => 'Hello, Inertia.js with Vue.js!']);
});
