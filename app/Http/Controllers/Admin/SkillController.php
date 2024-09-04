<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $skills = Skill::paginate(5);
        
       return view("admin-panel.skill.index",compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("admin-panel.skill.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'percent'=> 'required',
        ]);
 
        Skill::create([
            'name' => $request->name,
            'percent' => $request->percent
        ]);

        return redirect('admin/skills')->with('successMsg','You have successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $skill = Skill::find($id);
        return view('admin-panel.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return "I'm update";
        $skill = Skill::find($id)->update([
            "name"=> $request->name,
            "percent"=> $request->percent
        ]);
        return redirect("admin/skills")->with("successMsg","You have successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::find($id)->delete();
        
        return redirect("admin/skills")->with("delmsg","You've deleted one");
    }
}
