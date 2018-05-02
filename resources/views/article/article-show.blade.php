@extends('article.layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p>
        {{ $article->content }}
    </p>
    <button type="button" onclick="{{ Redirect::to('Controllers.ArticleController')}}">Validate</button>
@endsection