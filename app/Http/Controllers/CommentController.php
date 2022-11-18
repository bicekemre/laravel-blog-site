<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Blog;
use App\Models\Comment;
use http\Env\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->returnUrl= "/users/{}/comments";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Blog $blog)
    {
        $comments = $blog->comments;
        return view("admin/comments/index", ["comments"=>$comments, "blogs"=>$blog]);
    }

    private function editReturnUrl($id)
    {
        $this->returnUrl = "/blogs/$id/sight";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Blog  $blog
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Blog $blog, CommentRequest $request)
    {
        $comments = new Comment();
        $data = $this->prepare($request, $comments->getFillable());
        $comments->fill($data);
        $comments->save();

        $this->editReturnUrl($blog->blog_id);

        return Redirect::to($this->returnUrl);
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
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return View
     */
    public function destroy(Blog $blog, Comment $comment) : View
    {
        $comment->blog_id->is($blog);

        $comment->delete();

        return Redirect::to($this->returnUrl);
    }
}
