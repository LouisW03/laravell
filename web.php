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
});


//closure
Route::get('/profile', function () {
    return "ini adalah profil siswa";
})->name('profilesiswa');


//route name
Route::get('/apaini', function () {
    return route('profilesiswa');
});


//parameter
Route::get('/profile/{id}', function ($id) {
    return $id;
});


//controller
Route::get('/cobacontroller', 'TestController@show');


//resource
Route::resource('resource', 'TestControllerLagi');