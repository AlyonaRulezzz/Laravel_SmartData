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
    return view('welcome');
})->name('welcome-form');

Route::get('/form_authors', function () {
    // dd(Request:: all()); 
  return view('form_authors');
})->name('form_authors-form');

Route::get('/list', function () {
    // dd(Request:: all()); 
  return view('list');
})->name('list-form');

// Route::get('/form_authors', function () {
//     // dd(Request:: all()); 
//   return view('form_authors');
// })->name('form_authors-form');