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

    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];
    
    return view('welcome');
});
