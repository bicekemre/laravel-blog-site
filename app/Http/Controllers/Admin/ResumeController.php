<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ResumeController extends Controller
{

    public function __construct()
    {
        $this->returnUrl = "admin/resume";
    }


    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $sections = Resume::all();
        return view('admin.resume.index', ['sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.resume.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $section = new Resume();
        $data = $this->prepare($request, $section->getFillable());
        $section->fill($data);
        $section->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show()
    {
        $sections = Resume::all();
        return view("visitor.resume.index", ['sections'=>$sections]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return View
     */
    public function edit(Resume $section): View
    {
        return view('admin.resume.update', ['section'=>$section]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Resume  $section
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $section = Resume::all('section_id');
        $data = $this->prepare($request, $section->getFillable());
        $section->fill($data);
        $section->save();


        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Resume  $section
     * @return RedirectResponse
     */
    public function destroy(Resume $section): RedirectResponse
    {
        $section->delete();
        return Redirect::to($this->returnUrl);
    }
}
