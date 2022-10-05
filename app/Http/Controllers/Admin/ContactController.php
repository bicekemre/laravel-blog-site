<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->returnUrl= "/admin/contacts";
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contact  $contacts
     * @return View
     */
    public function edit(): View
    {
        $contacts = Contact::where('id', 1)->first();
        return view("admin.contacts.index", ["contact" =>$contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactRequest  $request
     * @return Response
     */
    public function create(ContactRequest $request): Response
    {
        $contact = new Contact();
        $data = $this->prepare($request, $contact->getFillable());
        $contact->fill($data);
        $contact->save();

        return Redirect::to($this->returnUrl);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  ContactRequest $request
     * @param  Contact $contacts
     * @return Response
     */
    public function update(Request $request)
    {
        $contacts = Contact::where('id', 1)->first();
        $data = $this->prepare($request, $contacts->getFillable());
        $contacts->fill($data);
        $contacts->save();

        return Redirect::to($this->returnUrl);
    }





}
