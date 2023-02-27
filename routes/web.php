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

Route::get('/create_user', function () {
    echo "create user";
});
Route::post('/save_created_user', function () {
    echo "save created user";
});
Route::get('/create_object', function () {
    echo "create object";
});
Route::post('/save_created_object', function () {
    echo "save created object";
});
Route::get('/timecard', function () {
    echo "timecard";
});
Route::post('/save_timecard', function () {
    echo "save timecard";
});
Route::get('/render', function () {
    echo "render";
});
