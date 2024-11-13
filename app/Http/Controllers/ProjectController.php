<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Debugbar;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index',['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        Debugbar::error('Error in create method of project controller!');
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->{'name'});

        $validated = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->save();
        session()->flash('success', 'Project created successfully!');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::with('tasks')->FindOrFail($id);
        return view('project_show',['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                $project = Project::FindOrFail($id);
        $project->delete();
        return redirect()->route('projects.index') ->with('success', 'Project deleted successfully!');
    }
}
