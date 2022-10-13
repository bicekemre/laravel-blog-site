<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "admin/user";

        return $this->validationCode = rand(100000 , 999999);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::all();
        return view('admin.users.index', ["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("admin.users.insert_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $data = $this->prepare($request, $user->getFillable());
        $user->fill($data);
        $user->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(User $user): View
    {
        return view("admin.users.update", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param  User  $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $data = $this->prepare($request, $user->getFillable());
        $user->fill($data);
        $user->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::to($this->returnUrl);
    }

    public function passwordForm(User $user): View
    {
        return view("admin.mainpage.password_form", ["user" => $user]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param  User  $user->number
     * @return Response
     */
    public function validation(User  $user)
    {
        $number = $user->number;
        $code =  $this->validationCode;
        $user = User::where('number', '=', $number )->first();
        $user->validation = $code;
        return $user->save;
    }

    public function changePassword(User $user, UserRequest $request)
    {




        $data = $this->prepare($request, $user->getFillable());
        $user->fill($data);
        $user->save();
        return redirect('admin/login');
    }
}
