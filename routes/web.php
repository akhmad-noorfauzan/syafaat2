<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/ptpersero', function () {
    return view('ptpersero'); // Perbaiki rujukan tampilan
});

Route::get('/cv', function () {
    return view('cv'); // Perbaiki rujukan tampilan
});


Route::get('/oss', function () {
    return view('oss'); // Perbaiki rujukan tampilan
});

Route::get('/yayasan', function () {
    return view('yayasan'); // Perbaiki rujukan tampilan
});

Route::get('/lkpm', function () {
    return view('lkpm'); // Perbaiki rujukan tampilan
});

Route::get('/modal', function () {
    return view('modal'); // Perbaiki rujukan tampilan
});

