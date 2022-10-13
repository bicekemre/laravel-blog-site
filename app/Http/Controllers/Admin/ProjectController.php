<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->returnUrl= "/admin/projects";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $projects = Project::all();
        return view("admin.projects.index", ["projects"=>$projects]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("admin.projects.insert");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProjectRequest  $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project();
        $data = $this->prepare($request, $project->getFillable());
        $project->fill($data);
        $project->save();

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
        return view("visitor.projects");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     * @return View
     */
    public function edit($project)
    {
        return view("admin.projects.update" , ["project"=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectRequest  $request
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function update(Request $request, $project)
    {
        $data = $this->prepare($request, $project->getFillable());
        $project->fill($data);
        $project->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function destroy(Project  $project)
    {
        $project->delete();
        return Redirect::to($this->returnUrl);
    }
}
