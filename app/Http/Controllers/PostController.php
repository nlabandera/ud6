<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construc(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('posts.index')->with('posts',Auth::user()->posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->category_id = $request->category;
        $post->user_id = auth()->user()->id;
        if(isset($request->image)){
            $post->image = $request->image;
            // falta guardar la imagen
        }
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
            return view('posts.show')->with('post',$post);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
            return view('posts.edit')->with('post',$post)->with('categories',Category::all());
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       
            $post->title = $request->title;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->category_id = $request->category;
            $post->user_id = auth()->user()->id;
            if(isset($request->image))
                $post->image = $request->image;
            $post->save();
            return redirect('/posts');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    
            $post->delete();
            return redirect('/posts');
      
    }
}
