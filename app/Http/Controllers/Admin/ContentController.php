<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Models\Content;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->returnUrl= "/admin/contents";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       return view("admin.contents.index");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view("visitor.theme");
    }



    public function showHome(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.home" ,["content"=>$content]);
    }
    public function showBlog(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.blog" ,["content"=>$content]);
    }
    public function showContact(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.contact" ,["content"=>$content]);
    }
    public function showResume(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.resume" ,["content"=>$content]);
    }
    public function showAbout(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.about" ,["content"=>$content]);
    }
    public function showProjects(): View
    {
        $content = Content::where('id', 1)->first();
        return view("admin.contents.projects" ,["content"=>$content]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ContentRequest $request
     * @return RedirectResponse
     */
    public function update(Request $request, )
    {
        $content = Content::where('id', 1)->first();
        $data = $this->prepare($request, $content->getFillable());
        $content->fill($data);
        $content->save();

        return Redirect::to($this->returnUrl);
    }
}
