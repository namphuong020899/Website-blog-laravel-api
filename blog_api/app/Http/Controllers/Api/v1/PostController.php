<?php

namespace App\Http\Controllers\Api\v1;

use App\CategoryPost;
use App\Post;
use Illuminate\Http\Request;
use File;
use Storage;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id_post','DESC')->get();

        return view('layouts.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('layouts.post.create')->with(compact('category'));
        
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
        $post->title_post = $request->title;
        $post->post_view = 0;
        $post->date = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $post->short_desc = $request->short_desc;
        $post->desc = $request->short_desc;
        $post->post_category_id = $request->post_category_id;

        if ($request['image']) {
            $image = $request['image'];
            $text = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;
        }else{
            $post->image = 'default.jpg';
        }
        $post->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post = Post::find($post);
        $category = CategoryPost::all();

        return view('layouts.post.show')->with(compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->title_post = $request->title;
        $post->post_view = $request->post_view;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->date = $request->date;
        $post->post_category_id = $request->post_category_id;

        if ($request['image']) {
            unlink('public/uploads/'.$post->image);
            $image = $request['image'];
            $text = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;
        }
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {

        $path = 'public/uploads/';
        $post = Post::find($post);
        if ($post->image == 'default.jpg') {
            $post->delete();
        }else{
            unlink($path.$post->image);
            $post->delete();
        }

        return back();
    }
}
