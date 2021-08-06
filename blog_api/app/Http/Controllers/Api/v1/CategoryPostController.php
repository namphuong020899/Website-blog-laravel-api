<?php

namespace App\Http\Controllers\Api\v1;

use App\CategoryPost;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryPost::all();
        
        return view('layouts.category.index')->with(compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CategoryPost();
        $category->title_category = $request->title;
        $category->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
        $category_show = CategoryPost::find($categoryPost);
        return view('layouts.category.show')->with(compact('category_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        
        $category = CategoryPost::find($categoryPost);
        $category->title_category = $request->title;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        $category->delete();
        return back();
    }
}
