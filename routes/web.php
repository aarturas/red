<?php
use App\Http\Controllers\PageController;

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


Route::get('', 'PageController@index')->name('home');
Route::get('about-us', 'PageController@aboutUs')->name('about_us');
Route::get('social', 'PageController@social')->name('social');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('SaraMcCoy', 'PageController@SaraMcCoy')->name('SaraMcCoy');
Route::get('DennisKim', 'PageController@DennisKim')->name('DennisKim');
Route::get('EmilyPorter', 'PageController@EmilyPorter')->name('EmilyPorter');






// Route::get('create', 'UserController@create')->name('page.create');
// Route::get('edit', 'UserController@edit')->name('page.edit');


