@extends('layout.app')
@section('content')
<form method="post" action="/posts/{{$post->id}}">
    @csrf
    @method('put')
    Title<input type="text" name ="title" class="form-control"value="{{$post->title}}" placeholder= "Title"><br>
    Body<input type="text" name ="body"class="form-control"value="{{$post->body}}" placeholder= "body"><br>
    
    <input type="submit" value="Update"class="btn btn-primary mb-3">
</form>
@endsection