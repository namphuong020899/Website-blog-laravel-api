<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\CategoryPost;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_page = Post::orderBy(DB::raw('RAND()'))->limit(4)->get();
        $post_hot = Post::orderBy('post_view','DESC')->take(4)->get();
        $post_new = Post::orderBy('id_post', 'DESC')->first();
        $tukhoa = $_GET['tukhoa'];

        $get_post = Post::where('title_post','LIKE','%'.$tukhoa.'%')->Orwhere('short_desc','LIKE','%'.$tukhoa.'%')->Orwhere('desc','LIKE','%'.$tukhoa.'%')->get();

        $category = CategoryPost::all();
        return view('pages.search')->with(compact('category','get_post','tukhoa','post_new','post_page','post_hot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
