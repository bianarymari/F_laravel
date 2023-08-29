@extends('layout.app')
@section('content')
<ul>

    <li> {{$post->id}}</li>
    <li> {{$post->title}}</li>
    <li> {{$post->body}}</li>
    <li> {{$post->created_at}}</li>
    <li> {{$post->updated_at}}</li>
</ul>    
@endsection   