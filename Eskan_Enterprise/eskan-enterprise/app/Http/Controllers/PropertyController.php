<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Prophecy\Prophet;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
        return view('admins.propertiesIndex', compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/propertiesIndex?do=addProperty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $properties = new Property();

        $properties->name            = $request->input('name');
        $properties->save();
        return redirect('/propertiesIndex')->with('status', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = Property::with('unit', 'main_projects')->find($id);
        
        $property_id = $properties->id;
        $units = Unit::select()->where('property_id', '=', $property_id)->get();
        
        // $units = Unit::join('main_projects', 'units.property_id', '=', 'main_projects.property_id')
        // ->where([['units.property_id', '=', $property_id]])
        // ->get(['units.*', 'main_projects.name']);

        // $units = Unit::select('units.*', 'main_projects.name as main_projects_name')
        // ->join('main_projects', 'main_projects.property_id', '=', 'main_projects.property_id')
        // ->where([['units.property_id', '=', $property_id]])
        // ->get(['units.*', 'main_projects_name']);

        return view('admins.properties.showProperties', compact('properties', 'units'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::find($id);
        return view('admins.properties.editProperty', compact('properties'));
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
        $properties = Property::find($id);

        $properties->name        = $request->input('name');
        $properties->update();
        return redirect('/propertiesIndex')->with('status', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Property::find($id);

        $properties->delete();
        return redirect('/propertiesIndex')->with('status', 'Property deleted successfully');
    }
}
