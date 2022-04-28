<?php

namespace App\Http\Controllers;

use App\Models\MainProject;
use Illuminate\Http\Request;

class MainProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainProjects = MainProject::all();
        return view('admins.mainProjectsIndex', compact('mainProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainProjects = new MainProject();

        $mainProjects->name            = $request->input('name');
        $mainProjects->property_id     = $request->input('property_id');
        $mainProjects->save(); 
        return redirect('/mainProjectsIndex')->with('status', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainProjects = MainProject::find($id);
        return view('admins.mainProjects.editmainProjects', compact('mainProjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mainProjects = MainProject::find($id);

        $mainProjects->name            = $request->input('name');
        $mainProjects->property_id     = $request->input('property_id');
        $mainProjects->update(); 
        return redirect('/mainProjectsIndex')->with('status', 'Category added successfully');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
