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
    return view('home');
}) ->name('home');

Route::get('/about', function () {
    return view('about');
}) ->name('about');

Route::get('/team', function () {
    return view('team');
}) ->name('team');

Route::get('/subsidiaries', function () {
    return view('subsidiaries');
}) ->name('subsidiaries');

Route::get('/governance', function () {
    return view('governance');
}) ->name('governance');

Route::get('/business', function () {
    return view('business');
}) ->name('business');

Route::get('/relations', function () {
    return view('relations');
}) ->name('relations');

Route::get('/hse', function () {
    return view('hse');
}) ->name('hse');


Route::get('/csr', function () {
    return view('csr');
}) ->name('csr');

Route::get('/blog', function () {
    return view('blog');
}) ->name('blog');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');
