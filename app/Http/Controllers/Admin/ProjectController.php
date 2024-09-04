<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin-panel.project.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        return view("admin-panel.project.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name"=> "required",
            "url"=>"required",
        ]);
        $projects = Project::create([
            "name"=> $request->name,
            "url"=> $request->url
        ]);

        return redirect("admin/projects")->with("successMsg","You've created a project successfully!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('admin-panel.project.edit',compact('project'));      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id)->update(
            [
                "name"=> $request->name,
                "url"=> $request->url
            ]
            );
            return redirect("admin/projects")->with("successMsg","You've updated successfully!!");
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id)->delete();
        return redirect("admin/projects")->with("delmsg","You've deleted one!!");
    }
}
