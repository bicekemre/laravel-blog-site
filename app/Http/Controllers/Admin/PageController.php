<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Contact;

class PageController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contact  $contact
     * @return View
     */
    public function index(): View
    {
        $contact = Contact::where('id', 1)->first();


        return view("admin.mainpage.index",  ["contact" =>$contact]);
    }

    /**
     * Show the form for the specified resource.
     *
     * @param  Contact  $contact
     * @return View
     */
    public function show(): View
    {
        $contact = Contact::where('id', 1)->first();


        return view("visitor.index",  ["contact" =>$contact]);
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
        return redirect("/admin/login");
    }
}
