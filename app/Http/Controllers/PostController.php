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
        if(auth()->user()->id == $post->user_id){
            return view('posts.show')->with('post',$post);
        }else{
            // aborta devolviendo un status 403 (forbiden)
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(auth()->user()->id == $post->user_id){
            return view('posts.edit')->with('post',$post)->with('categories',Category::all());
        }else{
            // aborta devolviendo un status 403 (forbiden)
            abort(403, 'Unauthorized action.');
        }
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
        if(auth()->user()->id == $post->user_id){
            $post->title = $request->title;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->category_id = $request->category;
            $post->user_id = auth()->user()->id;
            if(isset($request->image))
                $post->image = $request->image;
            $post->save();
            return redirect('/posts');
        }else{
            // aborta devolviendo un status 403 (forbiden)
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(auth()->user()->id == $post->user_id){
            $post->delete();
            return redirect('/posts');
        }else{
            // aborta devolviendo un status 403 (forbiden)
            abort(403, 'Unauthorized action.');
        }
    }
}
