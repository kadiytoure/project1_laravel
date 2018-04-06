@extends('article.layout')

@section('content')
    <ul>
        @foreach($articles as $article)
            <li><a href="{{ articles.show }}">{{$article->title}}</a></li>
        @endforeach
    </ul>
@endsection