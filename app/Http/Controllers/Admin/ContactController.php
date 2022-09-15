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
     * @param  Contact  $contact
     * @return View
     */
    public function edit(): View
    {
        $contact = Contact::where('id', 1)->first();
        return view("admin.contacts.index", ["contact" =>$contact]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ContactRequest $request
     * @param  Contact $contact
     * @return Response
     */
    public function update(Request $request)
    {
        $contact = Contact::where('id', 1)->first();
        $data = $this->prepare($request, $contact->getFillable());
        $contact->fill($data);
        $contact->save();

        return Redirect::to($this->returnUrl);
    }
}
