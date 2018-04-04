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

Route::resources('article', 'ArticleController');
Route::get('/', function () {

    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];

    return view('article.child');
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

Route::get('/articles/{year?}/{tag?}', function ($year = 2018, $tag = 'lorem'){
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
// comparer year de $article avec year de l'URL
// si c'est ok, mettre l'article dans $find
foreach ($articles as $article) {
   if ($year && $year == $article["year"]) {
       array_push($find, $article );
   }

    if(isset($tag)) {
        //parcourir les tags de l'article en cour
        // comparer chaque tag avec celui passé en paramètre
        // si ok, ajouter l'article dans $find
        foreach ($article['tags'] as $tagFromArticle) {
            if ($tag == $tagFromArticle) {
                array_push($find, $article);
            }
        }
       
    }

}

// supprimer les doublons de $find


return $find;
});
