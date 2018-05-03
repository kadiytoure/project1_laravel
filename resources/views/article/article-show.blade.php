@extends('article.layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p>
        {{ $article->content }}
    </p>
    <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="btn btn-default" type="button" class="btn btn-default" >Modifier</a>
@endsection