<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Customer;
use App\Models\Property;
use App\Models\MainProject;
use App\Models\Construction;
use Illuminate\Http\Request;

class UnitController extends Controller
{
///////////////////////////////////////////////
//* Display a listing of the resource.
///////////////////////////////////////////////
    public function index()
    {
        $units = Unit::all();
        return view('admins.unitsIndex', compact('units'));
    }
    ///////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
public function create()
{
    $units         = Unit::all();
    $customers     = Customer::all();
    $properties    = Property::all();
    $main_projects  = MainProject::all();
    $constructions = Construction::all();
    return view('admins.units.addUnit', compact('units','customers' , 'properties', 'main_projects', 'constructions'));
}
////////////////////////////////////////////////
//* Store a newly created resource in storage.
////////////////////////////////////////////////
public function store(Request $request)
{
    $units = new Unit();

    $units->name            = $request->input('name');
    $units->property_id     = $request->input('property_id');
    $units->mainProject_id  = $request->input('main_project_id');
    $units->construction_id = $request->input('construction_id');
    $units->level_id        = $request->input('level_id');
    $units->site            = $request->input('site');
    $units->space           = $request->input('space');
    $units->price_m         = $request->input('price_m');
    $units->total_price     = $request->input('total_price');
    $units->unitDescription = $request->input('unitDescription');
    $units->status          = $request->input('status');
    $units->customer_id     = $request->input('customer_id');
    $units->save();
    return redirect('/unitsIndex')->with('status', 'Unit added successfully');
}
////////////////////////////////////////////////
//* Display the specified resource.
////////////////////////////////////////////////
public function show($id)
{
    $units     = Unit::find($id);
    // $customers = Unit::with('customer')->find($id)->customer;
    return view('admins.units.unitShow', compact('units'));

}
////////////////////////////////////////////////
//* Show the form for editing the specified resource.
////////////////////////////////////////////////
public function edit($id)
{
    $units = Unit::find($id);
    $customers     = Customer::all();
    $properties    = Property::all();
    $main_projects  = MainProject::all();
    $constructions = Construction::all();
    return view('admins.units.editUnit', compact('units', 'customers' , 'properties', 'main_projects', 'constructions'));
}
////////////////////////////////////////////////
//* Update the specified resource in storage.
////////////////////////////////////////////////
public function update(Request $request, $id)
{
    $units = Unit::find($id);


    $units->name            = $request->input('name');
    $units->property_id     = $request->input('property_id');
    $units->mainProject_id  = $request->input('main_project_id');
    $units->construction_id = $request->input('construction_id');
    $units->level_id        = $request->input('level_id');
    $units->site            = $request->input('site');
    $units->space           = $request->input('space');
    $units->price_m         = $request->input('price_m');
    $units->total_price     = $request->input('total_price');
    $units->unitDescription = $request->input('unitDescription');
    $units->status          = $request->input('status');
    $units->customer_id     = $request->input('customer_id');

    $units->update();
    return redirect('unitsIndex')->with('status', 'Unit Updated successfully');
}
////////////////////////////////////////////////
//* Remove the specified resource from storage
////////////////////////////////////////////////
public function destroy($id)
{
    $units = Unit::find($id);

    $units->delete();
    return redirect('/myTempletesIndex')->with('status', 'Unit deleted successfully');
}
////////////////////////////////////////////////
}
