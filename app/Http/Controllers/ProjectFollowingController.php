<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectFollowing;
use Illuminate\Http\Request;
use App\Models\Responsable;

class ProjectFollowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(REQUEST $request)
    {
        //
        if($request->has('search')){
            $following = ProjectFollowing::where('dami','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $following = ProjectFollowing::paginate(5);
        }

       
        return view ('following.index')->with('following', $following);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $resp = Responsable::all();
        $proj = Project::all();
        return view('following.create')->with('resp',$resp)->with('proj',$proj);
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
        ProjectFollowing::create($input);
        return redirect('following')->with('flash_message', 'Following Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_following)
    {
        //
        $projectFollowing = ProjectFollowing::find($id_following);
        return view('following.show')->with('projectFollowing', $projectFollowing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_following)
    {
        //
        $projectFollowing = ProjectFollowing::find($id_following);
        $resp = Responsable::all();
        $proj = Project::all();
        return view('following.edit')->with('resp',$resp)->with('proj',$proj)->with('projectFollowing', $projectFollowing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_following)
    {
        //
        $projectFollowing = ProjectFollowing::find($id_following);
        $input = $request->all();
        $projectFollowing->update($input);
        return redirect('following')->with('flash_message', 'Following Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_following)
    {
        //
        ProjectFollowing::destroy($id_following);
        return redirect('following')->with('flash_message', 'Following deleted!');  
    }
}
