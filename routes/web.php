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

/*
Route::get('/', function () {
   return view('welcome');
   
});
*/

Route::get('/','App\Http\Controllers\PagesController@home');
Route::get('/test','App\Http\Controllers\PagesController@index');

Route::get('/about','App\Http\Controllers\PagesController@about');

Route::get('/hello', function () {
    
    return '<h1>hello world</h1>';
 });

 Route::get('/about', function () {
    
    return view('pages/about') ;
 });

 Route::get('/users/{id}', function ($id) {
    
    return 'this is a user' . ($id) ;
 });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/podcasts', 'App\Http\Controllers\PodcastsController');
Route::resource('/journal', 'App\Http\Controllers\JournalController');
Route::resource('/essays', 'App\Http\Controllers\EssaysController');
Route::resource('/researchpapers', 'App\Http\Controllers\ResearchpapersController');