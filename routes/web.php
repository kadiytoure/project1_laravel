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

Route::get('/article/{index}', function ($index) {
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

Route::get('/articles/{year?}/{tag?}', function ($year = 2018, $tag){
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
];

$find = [];

// parcourir $articles
foreach ($articles as $article) {
   if ($year && $year == $article["year"]) {
       array_push($find, $article );
   }

    if($tag) {
        //parcourir les tags de l'article en cours
        // comparer chaque tag avec celui passé en paramètre
        // si ok, ajouter l'article dans $find
    }

}
// comparer year de $article avec year de l'URL
// si c'est ok, mettre l'article dans $find



/*
if(!array_key_exists($year)){
    return redirect()->route('article_year_tag');
} else {
    return $year;
}
})->name('article_year_tag');
*/
/*
if (!$year) {
    return $year;
} else {
    //echo "error";
}
*/
return $find;
});
