<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $posts= Post::all();
       return view('post.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        

        $post=new Post;
        $post->title= $request->title;
         $post->body= $request->body;
         $post->user_id= Auth::id();
         $post->save();
         echo "Done";
         return redirect("/posts");
          
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $post= Post::find($id);
        return view("post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::find($id);
        return view("post.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post= Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect("/posts");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect("/posts");
    }
}
