<?php

use Illuminate\Support\Facades\Auth;
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

/* GUEST ROUTES */

Route::get('/', 'PageController@index')->name('home');
Route::get('vueposts', 'PageController@vueindex')->name('vue');

/* Blog */
Route::resource('posts', 'Postcontroller')->only('index', 'show');

/*Contact  */
Route::get('contacs', 'ContactController@contacts')->name('contacts');
Route::post('contacts', 'ContactController@sendForm')->name('send.contact.form');

/*  GUEST ROUTES */





/* ADMIN ROUTES */
Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashbord');
    Route::resource('posts', 'PostController');
});

/* ADMIN ROUTES */



/* Register false chiude le registrazioni al sito */
//Auth::routes(['register' => false]);
Auth::routes();
