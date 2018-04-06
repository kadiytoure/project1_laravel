@extends('article.layout')

@section('content')
<form class="col-md-6 offset -md-2 mt-3">
<label for="title">Title</label>
<input type="text" name="title" class="form-control"/>
<textarea rows="4" cols="48"></textarea>
<input type="checkbox" name="enabled" value="available" >Enabled<br>
<input type="checkbox" name="not_enabled" value="not_available" >Not_enabled<br>
</form>
@endsection