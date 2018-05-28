@extends('article.layout')

@section('content')
    <ul>
        @foreach($articles as $article)
            <li><a href="{{ route('article.show', $article->id) }}">{{$article->title}}</a></li>        
        @endforeach
    </ul>
@endsection