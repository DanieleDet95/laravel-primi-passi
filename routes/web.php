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
    return view('home-page');
})->name('home');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy');

Route::get('/domande-frequenti', function () {
    $faqs_prima = config('faqs_prima');
    $faqs_dopo = config('faqs_dopo');
    return view('faq', [
      'faqs_prima' => $faqs_prima,
      'faqs_dopo' => $faqs_dopo
    ]);
})->name('faq');
