@extends('layout.app')
@section('content')
<form method="post" action="/posts">
    @csrf
    Title<input type="text" name ="title" placeholder= "Title"><br>
    Body<input type="text" name ="body" placeholder= "body"><br>
    
    <input type="submit" value="Add">
</form>

<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
</ul>
@endsection