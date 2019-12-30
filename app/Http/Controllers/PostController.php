<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['auth','role:user']);
    }

    public function index()
    {
        $user = Auth::user();
        
        $posts=Post::where('user_id',$user->id)->get();

        return view('posts.index',['posts'=>$posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create')->with('categories',Category::all());;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');
        $post->category_id = request('category');
        $post->user_id = auth()->user()->id;
        
        if(isset($post->image))
            $post->image = request('image');

        $post->save();

        return view ('posts.show');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        /*$this->authorize('view',$post);

        return view('posts.show', compact('post'));*/

         if(auth()->user()->id == $post->user_id){
            return view('posts.show')->with('post',$post);
        }

       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        if(auth()->user()->id == $post->user_id){
            return view('posts.edit')->with('post',$post)->with('categories',Category::all());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post=Post::find($id);
        if(auth()->user()->id == $post->user_id){
            $post->title = $request->title;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->category_id = $request->category;
            $post->user_id = auth()->user()->id;
            if(isset($request->image))
                $post->image = $request->image;
            $post->save();
            return redirect('posts');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts');
    }
}
