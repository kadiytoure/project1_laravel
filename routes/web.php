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

Route::get('/articles', function () {
    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];

    return $articles;
})->name('article_list');

Route::get('/articles/{index}', function ($index) {
    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];

    if(!array_key_exists($index, $articles)) {
        return redirect()->route('article_list');
    }

    return $articles[$index];
})->where('index', '[0-9]+');

Route::get('/articles/{year}/{tag}', function ($year, $tag){
    $articles = [
    [
        "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "year" => 2018,
        "tags" => ["Lorem", "Ipsum"]
    ],
    [
        "title" => "Vivamus id massa ac ex rutrum vestibulum.",
        "year" => 2018,
        "tags" => ["Lorem", "Massa"]
    ],
    [
        "title" => "Nam purus justo, porttitor vel urna id, blandit aliquam orci.",
        "year" => 2017,
        "tags" => ["Ipsum", "Massa"]
    ],
]
});
