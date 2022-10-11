<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogCategory $category=null)
    {
        $blogs = Blog::orderBy('id', 'desc')
        ->where('is_active', true)
        ->when($category, function ($query, $category) {
            $query->where('blog_category_id', $category->id);
            // dd($category);
        })
        ->paginate(5);
        $categories = BlogCategory::all();
        $recentBlogs = Blog::where('is_active', true)->orderBy('id', 'desc')->get()->take(3);
        return view('pages.blog.index', compact('blogs', 'categories', 'recentBlogs'));
    }

    // public function indexByCategory(BlogCategory $category)
    // {
    //     $blogs = Blog::orderBy('id', 'desc')->where('blog_category_id', $category->id)
    //     ->paginate(5);
    //     $categories = BlogCategory::all();
    //     return view('pages.blog.index', compact('blogs'));
    // }

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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        if($blog->is_active){
            $recentBlogs = Blog::where('is_active', true)->orderBy('id', 'desc')->get()->take(3);
            $categories = BlogCategory::all();
            return view('pages.blog.show', compact('blog', 'categories', 'recentBlogs'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
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
