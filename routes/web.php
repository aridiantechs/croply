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
|--------------------------------------------------------------------------
| Clear Cache
|--------------------------------------------------------------------------
|
*/
Route::get('/clear', function(){
  Artisan::call('cache:clear');
  // Artisan::call('route:cache');
  Artisan::call('view:clear');
  Artisan::call('config:cache');
  return "Done! Go Back and Refresh Page Please";
})->name('clear');


Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
