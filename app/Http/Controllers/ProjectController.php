<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        if($request->has('search')){
            $project = Project::where('project_name','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $project = Project::paginate(5);
        }
        
        return view ('project.index')->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Project::create($input);
        return redirect('project')->with('flash_message', 'Project Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($matricule_project)
    {
        //
        $project = Project::find($matricule_project);
        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($matricule_project)
    {
        //
        $project = Project::find($matricule_project);
        return view('project.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricule_project)
    {
        //
        $project = Project::find($matricule_project);
        $input = $request->all();
        $project->update($input);
        return redirect('project')->with('flash_message', 'Project Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricule_project)
    {
        //
        Project::destroy($matricule_project);
        return redirect('project')->with('flash_message', 'Project deleted!');  
    }

    
}
