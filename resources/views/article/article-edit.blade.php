@extends('article.layout')

@section('content')
<h1>Articles</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="{{ route('article.update', ['id' => $article->id])}}" class="col-md-6 offset -md-2 mt-3">
{{ method_field('PUT') }}
{{ csrf_field() }}
<input type="text" name="title" class="form-control" value="{{ $article->title }}" />

<label for="title">Contenu :</label>
<textarea name="content" rows="4" cols="48">{{ $article->content }}</textarea>

<input type="checkbox" name="is_enabled" value="{{ $article->is_enabled }}" >Enabled<br>

<input type="submit" value="Edit" >
</form>
@endsection