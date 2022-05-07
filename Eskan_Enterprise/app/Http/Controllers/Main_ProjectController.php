<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MainProject;
use Illuminate\Http\Request;

class Main_ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_projects = MainProject::all();
        return view('admins.main_projectsIndex', compact('main_projects'));
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
        $main_projects = new MainProject();

        $main_projects->name            = $request->input('name');
        $main_projects->property_id     = $request->input('property_id');
        $main_projects->save();
        return redirect('/main_projectsIndex')->with('status', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main_projects = MainProject::with('customers', 'units')->find($id);
        $main_projects->customers()->attach($id);
        return view('admins.main_projects.showMain_project', compact('main_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_projects = MainProject::find($id);
        return view('admins.main_projects.editmain_projects', compact('main_projects'));
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
        $main_projects = MainProject::find($id);

        $main_projects->name            = $request->input('name');
        $main_projects->property_id     = $request->input('property_id');
        $main_projects->update();
        return redirect('/main_projectsIndex')->with('status', 'Category added successfully');
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
