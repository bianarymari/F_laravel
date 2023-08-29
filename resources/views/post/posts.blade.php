@extends('layout.app')
@section('content')
<a href='/posts/create'> Add New Posts</a>
<table border =2 class="table">
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Body</th>
    <th>Create At</th>
    <th>Posted By</th>
    <th>Update At</th>
    <th>Action</th>
</tr>    

@foreach($posts as $post)
<tr>

   <td>{{$post->id}}</td>
   <td>{{$post->title}}</td>
   <td>{{$post->body}}</td>
   <td>{{$post->created_at}}</td>
   <td>{{$post->user->name}}</td>
   <td>{{$post->updated_at}}</td>

    <td><a class="btn btn-primary mb-3"href= "/posts/{{$post['id']}}">View</a></td>
    <td><a class="btn btn-primary mb-3"href= "/posts/{{$post['id']}}/edit">ُEdit</a></td>
    <td><form action="/posts/{{$post['id']}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete"class="btn btn-danger">
    </form></td>
</tr>
@endforeach

</table>
@endsection