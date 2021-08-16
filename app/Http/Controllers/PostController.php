<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at')->get();        
        return view('posts.index', compact('posts'));
    }   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','desc')->get();      
        return view('posts.create',compact('categories'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([  
            'user_id'       => Auth::user()->id,    
            'title'          => $request->title,    
            'slug'          => Str::slug($request->title),  
            'category_id'   => $request->category_id,
            'extract'       => $request->extract,   
            'body'          => $request->body,  
            'status'        => 1
        ]);             
        if($request->file('image')){        
            $url = Storage::put('posts', $request->file('image'));
            $post->image()->create([
                'url' => $url       
            ]); 
        }                   
        if($post){                            
            return redirect('admin/publicaciones')->with('success', 'Se registro exitosamente la publicación!');
        }else{                              
            return redirect('admin/publicaciones/crear')->with('error', 'Error al registrar la publicación!');            
        }                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   
        $categories = Category::orderBy('name','desc')->get();      
        return view('posts.edit',compact('post','categories'));         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

}
