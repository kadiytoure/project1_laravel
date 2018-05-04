@extends('article.layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p>
        {{ $article->content }}
    </p>
    <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="btn btn-default" type="button" class="btn btn-default" >Modifier</a>
    <form action="{{ route('article.destroy', ['id' => $article->id]) }}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button type="submit" class="btn btn-default">Delete</button>
    </form>
@endsection