<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\File;

class ResponsableController extends Controller
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
            $responsable = Responsable::where('name','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $responsable = Responsable::paginate(5);
        }


        return view ('responsable.index')->with('responsable', $responsable);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('responsable.create');
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
        Responsable::create($input);
        return redirect('responsable')->with('flash_message', 'Responsable Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($matricule)
    {
        //
        $responsable = Responsable::find($matricule);
        return view('responsable.show')->with('responsable', $responsable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($matricule)
    {
        //
        $responsable = Responsable::find($matricule);
        return view('responsable.edit')->with('responsable', $responsable);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricule)
    {
        //
        $responsable = Responsable::find($matricule);
        $input = $request->all();
        $responsable->update($input);
        return redirect('responsable')->with('flash_message', 'Responsable Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricule)
    {
        //
        Responsable::destroy($matricule);
        return redirect('responsable')->with('flash_message', 'Responsable deleted!');  
    }

    
}
