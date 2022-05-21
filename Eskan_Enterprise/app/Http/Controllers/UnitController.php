<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Installment;
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
        $customers     = Customer::all();
        $properties    = Property::all();
        $main_projects = MainProject::all();
        $constructions = Construction::all();
        return view('admins.unitsIndex', compact('units','customers' , 'properties', 'main_projects', 'constructions'));
    }
    ///////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
public function create()
{

    $units         = Unit::all();
    $customers     = Customer::all();
    $properties    = Property::all();
    $main_projects = MainProject::all();
    $constructions = Construction::all();
    return view('admins.units.addUnit', compact('units','customers' , 'properties', 'main_projects', 'constructions'));
}

////////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
public function create2()
{

    $units         = Unit::all();
    $customers     = Customer::all();
    $properties    = Property::all();
    $main_projects = MainProject::all();
    $constructions = Construction::all();
    return view('tests.addUnitTest', compact('units','customers' , 'properties', 'main_projects', 'constructions'));
}

////////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
public function createUnitCustom(Request $request)
{
    $property_id     = $request->input('property_id');
    $main_project_id = $request->input('main_project_id');
    $construction_id = $request->input('construction_id');
    $space           = $request->input('space');
    $price_m         = $request->input('price_m');
    $unit_price      = $space * $price_m;
    $rows            = $request->input('rows');
    $units        = Unit::all();
    $customers    = Customer::all();
    // dd($main_project_get);
    $property     = Property::find($property_id);
    $properties   = Property::all();
    $main_project = MainProject::find($main_project_id);
    $main_projects= MainProject::all();
    $construction = Construction::find($construction_id);
    $constructions= Construction::all();
    return view('admins.units.createUnitCustom', compact('units','customers' , 'property', 'properties', 'main_project', 'main_projects', 'construction', 'constructions', 'space', 'price_m', 'unit_price', 'rows'));
}
////////////////////////////////////////////////
//* Store a newly created resource in storage.
////////////////////////////////////////////////
public function store(Request $request)
{
    $units = new Unit();

    $units->name            = $request->input('name');
    $units->property_id     = $request->input('property_id');
    $units->main_project_id = $request->input('main_project_id');
    $units->construction_id = $request->input('construction_id');
    $units->level_id        = $request->input('level_id');
    $units->site            = $request->input('site');
    $units->space           = $request->input('space');
    $units->price_m         = $request->input('price_m');
    $units->unit_price      = $request->input('unit_price');
    $units->unitDescription = $request->input('unitDescription');
    $units->status          = $request->input('status');
    $units->customer_id     = $request->input('customer_id');
    $units->save();
    return redirect('/unitsIndex')->with('status', 'Unit added successfully');
}
////////////////////////////////////////////////
//* Multiple Store a newly created resource in storage.
////////////////////////////////////////////////
public function unitMultipleStore(Request $request)
{
    foreach ($request->name as $key => $value) {
        
        $units = new Unit();
        
        $units->name            = $value;
        $units->property_id     = $request->property_id[$key];
        $units->main_project_id  = $request->main_project_id[$key];
        $units->construction_id = $request->construction_id[$key];
        $units->level_id        = $request->level_id[$key];
        $units->site            = $request->site[$key];
        $units->space           = $request->space[$key];
        $units->price_m         = $request->price_m[$key];
        $units->unit_price     = $request->unit_price[$key];
        $units->unitDescription = $request->unitDescription[$key];
        $units->status          = $request->status[$key];
        $units->customer_id     = $request->customer_id[$key];
        $units->save();
    }
    return redirect('/unitsIndex')->with('status', 'Unit added successfully');
}
////////////////////////////////////////////////
//* Display the specified resource.
////////////////////////////////////////////////
public function show($id)
{
    $unit     = Unit::find($id);
    $customer_id = $unit->customer_id;
    $finances = Finance::all();
    $installment = Installment::with('customers', 'unit', 'constructions', 'property','main_projects')->find($id);
    $installments = Installment::select()->where([['customer_id', $customer_id],['unit_id', $id]])->get();
    $payments = Payment::select()->where([['customer_id', $customer_id],['unit_id', $id]])->get();
    // $customers = Unit::with('customer')->find($id)->customer;
    return view('admins.units.unitShow', compact('unit', 'finances', 'installments', 'payments'));

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
    $units->main_project_id  = $request->input('main_project_id');
    $units->construction_id = $request->input('construction_id');
    $units->level_id        = $request->input('level_id');
    $units->site            = $request->input('site');
    $units->space           = $request->input('space');
    $units->price_m         = $request->input('price_m');
    $units->unit_price     = $request->input('unit_price');
    $units->unitDescription = $request->input('unitDescription');
    $units->status          = $request->input('status');
    $units->customer_id     = $request->input('customer_id');

    $units->update();
    return redirect('unitsIndex')->with('status', 'Unit Updated successfully');
}
////////////////////////////////////////////////
//* Show the form for editing the specified resource.
////////////////////////////////////////////////
public function editUnitStatus($id)
{
    $unitStatus = Unit::find($id);
    $customers  = Customer::all();
    return view('admins.units.editUnitStatus', compact('unitStatus', 'customers'));   
}
////////////////////////////////////////////////
//* Update the specified resource in storage.
////////////////////////////////////////////////
public function updateUnitStatus(Request $request, $id)
{
    $units = Unit::find($id);

    // $customer_id = $_GET['customer_id'];

    $units->status          = $request->input('status');
    $units->customer_id     = $request->input('customer_id');

    if ($units->customer_id == 0) {
        return '<h1>لم يتم اختيار العميل</h1>';
    }

    $units->update();
    return redirect('unitShow/'.$id)->with('status', 'status Updated successfully');
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
