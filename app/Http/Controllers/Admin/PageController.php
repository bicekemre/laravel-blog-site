<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Blog;
use App\Models\Content;
use App\Models\Project;
use http\Env\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Contact;

class PageController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return View
     */
    public function index(): View
    {
        $contact = Contact::where('id', 1)->first();


        return view("admin.mainpage.index", ["contact" => $contact]);
    }

    /**
     * Show the form for the specified resource.
     *
     * @param Contact $contact
     * @return View
     */
    public function show(): View
    {
        $content = Content::where('id', 1)->first();
        $contact = Contact::where('id', 1)->first();
        return view('visitor.index', ["contact" => $contact, "content" => $content]);
    }


    public function loginForm()
    {
        return view('admin.mainpage.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(["user_name", "password"]);
        $rememberMe = $request->get("remember-me", false);


        if (Auth::attempt($credentials, $rememberMe)) {
            return redirect("/admin");
        } else {
            return redirect()->back()->withErrors(
                [
                    "user_name" => "Please check your username.",
                    "password" => "Please check your password.",
                ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("admin/login");
    }


    public function getDownload() {
        $file_path = public_path('YunusEmreBicek.pdf');
        return response()->download($file_path);
    }
}
