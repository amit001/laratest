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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< 271cacc194c00a887a3b9c83e6191f39bfee0f08
Route::get('/about', function () {
    return 'about';
});


Route::get('/accessor', 'AccessorController@index');
=======
Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


 
>>>>>>> Test email first commit
