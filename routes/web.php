<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/accesscontroller', function () {
    return view('pages.accesscontroller');
});

Route::get('/alarm', function () {
    return view('pages.alarm');
});

Route::get('/cctv', function () {
    return view('pages.cctv');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/download', function () {
    return view('pages.download');
});

Route::get('/intercomsystem', function () {
    return view('pages.intercomsystem');
});

Route::get('/maintenance', function () {
    return view('pages.maintenance');
});

