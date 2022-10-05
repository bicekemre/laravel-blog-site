<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BlogController extends Controller
{


    public function __construct()
    {
        $this->returnUrl= "/admin/blogs";
    }




    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $blogs  =  Blog::all();
        return view("admin.blogs.index" ,["blogs"=>$blogs] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("admin.blogs.insert");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BlogRequest  $request
     * @return Response
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $data = $this->prepare($request, $blog->getFillable());
        $blog->fill($data);
        $blog->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog  $blog
     * @return View
     */
    public function edit(Blog $blog): View
    {
        return view("admin.blogs.update", ["blog" =>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BlogRequest  $request
     * @param  Blog $blog
     * @return Response
     */
    public function update(BlogRequest $request)
    {
        $blog = Blog::where('blog_id', $request->blog_id)->first();
        $data = $this->prepare($request, $blog->getFillable());
        $blog->fill($data);
        $blog->save();

        return Redirect::to($this->returnUrl);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return Redirect::to($this->returnUrl);
    }
}
