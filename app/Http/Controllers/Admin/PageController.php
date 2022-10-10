<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view("admin.mainpage.index");
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
