<?php

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

/* manage */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage_register', function () {
    return view('manage_register');
});

Route::get('/manage_list', function () {
    return view('manage_list');
});

Route::get('/manage_edit', function () {
    return view('manage_edit');
});

Route::get('/manage_login', function () {
    return view('manage_login');
});

/* front */
Route::get('/front_top', function () {
    return view('front_top');
});

Route::get('/front_blog_detail', function () {
    return view('front_blog_detail');
});

Route::get('/front_about', function () {
    return view('front_about');
});

Route::get('/front_contact', function () {
    return view('front_contact');
});

/*template*/
Route::get('/front_template2', function () {
    return view('front_template2');
});

Route::get('/front_template3', function () {
    return view('front_template3');
});

/* sample */
Route::get('/index', function () {
    return view('index');
});
