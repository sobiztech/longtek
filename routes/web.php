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

Route::get('/cctvs', function () {
    return view('pages.cctv');
});

Route::get('/alarms', function () {
    return view('pages.alarm');
});

Route::get('/accessControls', function () {
    return view('pages.accesscontrol');
});

Route::get('/intercomSystems', function () {
    return view('pages.intercomsystem');
});

Route::get('/maintenances', function () {
    return view('pages.maintenance');
});

Route::get('/aboutUs', function () {
    return view('pages.about');
});

Route::get('/contacts', function () {
    return view('pages.contact');
});

Route::get('/downloads', function () {
    return view('pages.download');
});

Route::get('/faqs', function () {
    return view('pages.faq');
});


// sub-Maintenance
Route::get('/cctvMaintenance', function () {
    return view('pages.subMaintanace.cctvMaintenance');
});
Route::get('/alarmMaintenance', function () {
    return view('pages.subMaintanace.alarmMaintenance');
});
Route::get('/accessControlMaintenance', function () {
    return view('pages.subMaintanace.accessControlMaintenance');
});
Route::get('/intercomSystemMaintenance', function () {
    return view('pages.subMaintanace.intercomSystemMaintenance');
});
