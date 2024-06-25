<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home', ['title' => 'Welcome To My Portfolio']);
});

Route::get('/sertifikat', function () {
    return view('home.sertifikat', ['title' => 'Sertifikat']);
});

Route::get('/project', function () {
    return view('home.project', ['title' => 'My Project']);
});

Route::get('/kontak', function () {
    return view('home.kontak', ['title' => 'My Kontak']);
});

Route::get('/cv', function () {
    return view('home.cv', ['title' => 'Curriculum Vitae']);
});

