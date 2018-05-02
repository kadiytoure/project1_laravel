<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles = DB::table('articles')
            ->latest()
            ->where("is_enabled", 1)
            ->get();

        // ordonner les articles par date
        // récupérer que les articles dont is_enabled = 1

        
        return view('article.article', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.article-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Valider le formulaire
        $valid_form = $request->validate([
             'title' => 'required|unique:articles|max:301',
             'content' => 'required|max:400',
        ]);
        // Créer le nouvel article
        $article = Article::create($request->all());

    // is_enabled -> mettre une valeur par défaut (cf database, migrations)
    // s'il y a des erreurs, afficher le formulaire pré-rempli 
    // avec la liste des erreurs(cf view)
        // redirect
        return redirect()->route('article.show', ['id' => $article->id]);
    }

    // si tout est ok, rediriger vers la page de l'article nouvellement créé.



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $article = DB::table('articles')->find($id);

     return view("article.article-show")->with("article", $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // charger l'article avec l'ID passé en paramètre

        // afficher un formulaire avec les données pré remplies

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        // mettre à jour en base de donnée à la validation du formulaire
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
