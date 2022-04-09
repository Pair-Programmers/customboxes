<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Database\Seeders\BlogCategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('adminpanel.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('adminpanel.pages.blog.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|unique:blogs,title',
        ]);

        $inputs = $request->all();
        $inputs['slug'] = Str::slug($request->title);
        $inputs['admin_id'] = Auth::guard('admin')->id();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/blogs/thumbnail', $name);
            $input['thumbnail'] = $name;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/blogs', $name);
            $input['image'] = $name;
        }
        Blog::create($inputs);
        return redirect()->route('admin.blog.index')->with('success', 'Created Successfuly !');
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
    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::all();
        $blog = Blog::findOrFail($blog->id);
        return view('adminpanel.pages.blog.edit', compact('blogCategories', 'blog'));
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
