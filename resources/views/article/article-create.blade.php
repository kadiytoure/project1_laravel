@extends('article.layout')

@section('content')
<h1>Create Post</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="/article" class="col-md-6 offset -md-2 mt-3">
{{ csrf_field() }}
<label for="title">Title :</label>
<input type="text" name="title" class="form-control" value="{{ old('title') }}" />

<label for="title">Contenu :</label>
<textarea name="content" rows="4" cols="48">{{ old('content') }}</textarea>

<input type="checkbox" name="is_enabled" value="1" >Enabled<br>

<input type="submit" value="Valider" >
</form>
@endsection