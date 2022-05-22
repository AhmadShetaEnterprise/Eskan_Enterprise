<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Property;
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
        $properties  = Property::all();
        return view('admins.main_projects.add_main_project', compact('properties'));
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
        // $main_projects->customers()->attach($id);
        return view('admins.main_projects.show_main_project', compact('main_projects'));
    }

    // public function show($id)
    // {
    //     $constructions = MainProject::with('customers', 'main_projects')->find($id);
    //     $construction_id = $constructions->id;
    //     $units = Unit::select()->where('construction_id', '=', $construction_id)->get();

    //     return view('admins.constructions.showConstruction', compact('constructions', 'units'));
    // }

    // public function search($id)
    // {
    //     $constructions = MainProject::with('customers', 'main_projects')->find($id);
    //     $status =$_GET['status'];
    //     $units = Unit::find($id)->where([['construction_id', '=', $id],['status', '=', $status]])->get();

    //     return view('admins.constructions.searchConstruction', compact('constructions', 'units'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties  = Property::all();

        $main_project = MainProject::find($id);
        return view('admins.main_projects.edit_main_project', compact('main_project', 'properties'));
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
