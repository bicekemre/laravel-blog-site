<?php

namespace App\Http\Controllers;

use App\Models\Message;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->returnUrl= "/contact";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $messages = Message::all();
        return view('admin.message.index', ["messages"=>$messages]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $messages = new Message();
        $data = $this->prepare($request, $messages->getFillable());
        $messages->fill($data);
        $messages->save();

        return Redirect::to($this->returnUrl);
    }
}
