<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Property;
use App\Models\MainProject;
use App\Models\Construction;
use App\Models\Customer;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constructions = Construction::all();
        $customers     = Customer::all();
        $properties    = Property::all();
        $main_projects = MainProject::all();
        return view('admins.constructionsIndex', compact('constructions','customers' , 'properties', 'main_projects',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties   = Property::all();
        $main_projects = MainProject::all();
        return view('admins.constructions.addConstruction', compact('properties', 'main_projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function createConstructionsRows(Request $request)
    {
        $property_id     = $request->input('property_id');
        $main_project_id = $request->input('main_project_id');
        $levels          = $request->input('levels');
        $level_units     = $request->input('level_units');
        $rows            = $request->input('rows');
        $total_units     = $level_units * $levels;
        $properties   = Property::all();
        $property     = Property::find($property_id);
        $main_projects= MainProject::all();
        $main_project = MainProject::find($main_project_id);
        return view('admins.constructions.addConstructions', compact('properties', 'property', 'main_projects', 'main_project', 'levels', 'level_units', 'total_units', 'rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $constructions = new Construction();
        // if ($request->hasFile('image'))
        // {
        //     $file            = $request->file('image');
        //     $ext             = $file->getClientOriginalExtension();
        //     $filename        = time().'.'.$ext;
        //     $file->move('assets/images/uploads/customer/',$filename);
        //     $customers->image = $filename;
        // }
        // if ($request->input('email')->exists())
        // {
        //     alert('email exists');
        // }

        $constructions->name            = $request->input('name');
        $constructions->property_id     = $request->input('property_id');
        $constructions->main_project_id = $request->input('main_project_id');
        $constructions->levels          = $request->input('levels');
        $constructions->level_units     = $request->input('level_units');
        if (!empty($request->input('total_units'))) {
            $constructions->total_units     = $request->input('total_units');
        } else {
            $constructions->total_units     = $constructions->level_units * $constructions->levels;
        }
        $constructions->coast           = $request->input('coast');
        $constructions->save();
        return redirect('/constructionsIndex?addConstruction')->with('status', 'Category added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMultipleConstructions(Request $request)
    {

        foreach ($request->name as $key => $value) {

            $constructions = new Construction();
            // if ($request->hasFile('image'))
        // {
        //     $file            = $request->file('image');
        //     $ext             = $file->getClientOriginalExtension();
        //     $filename        = time().'.'.$ext;
        //     $file->move('assets/images/uploads/customer/',$filename);
        //     $customers->image = $filename;
        // }
        // if ($request->input('email')->exists())
        // {
            //     alert('email exists');
            // }

            $constructions->name            = $value;
            $constructions->property_id     = $request->property_id[$key];
            $constructions->main_project_id = $request->main_project_id[$key];
            $constructions->levels          = $request->levels[$key];
            $constructions->level_units     = $request->level_units[$key];
            $constructions->total_units     = $request->total_units[$key];
            $constructions->coast           = $request->coast[$key];
            $constructions->coast           = $request->coast[$key];
            $constructions->save();
        }
            return redirect('/constructionsIndex?addConstruction')->with('status', 'Category added successfully');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $constructions = Construction::with('customers', 'main_projects')->find($id);
        $construction_id = $constructions->id;
        $units = Unit::select()->where('construction_id', $construction_id)->get();

        return view('admins.constructions.showConstruction', compact('constructions', 'units'));
    }

    public function showConstructionLevels($id)
    {
        $constructions = Construction::with('customers', 'main_projects')->find($id);
        $construction_id = $constructions->id;
        $units = Unit::select()->where('construction_id', '=', $construction_id)->get();

        return view('admins.constructions.levelsTable', compact('constructions', 'units'));
    }

    public function showConstructionUnits($id)
    {
        $constructions = Construction::with('customers', 'main_projects')->find($id);
        $construction_id = $constructions->id;
        $units = Unit::select()->where('construction_id', '=', $construction_id)->get();

        return view('admins.constructions.showConstructionUnits', compact('constructions', 'units'));
    }

    public function search($id)
    {
        $constructions = Construction::with('customers', 'main_projects')->find($id);
        $customers = Customer::all();
        $status =$_GET['status'];
        $units = Unit::find($id)->where([['construction_id', '=', $id],['status', '=', $status]])->get();

        return view('admins.constructions.searchConstruction', compact('constructions', 'units', 'customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $constructions = Construction::find($id);
        return view('admins.constructions.editConstruction', compact('constructions'));
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
        $constructions = Construction::find($id);
        // if ($request->hasFile('image'))
        // {
        //     $path = 'assets/images/uploads/Construction/'.$constructions->image;
        //     if (File::exists($path))
        //     {
        //         File::delete($path);
        //     }
        //     $file      = $request->file('image');
        //     $ext       = $file->getClientOriginalExtension();
        //     $filename  = time().'.'.$ext;
        //     $file->move('assets/images/uploads/construction/',$filename);
        //     $category->image = $filename;
        // }

        $constructions->name            = $request->input('name');
        $constructions->property_id     = $request->input('property_id');
        $constructions->main_project_id = $request->input('main_project_id');
        $constructions->levels          = $request->input('levels');
        $constructions->level_units     = $request->input('level_units');
        $constructions->total_units     = $request->input('total_units');
        $constructions->coast           = $request->input('coast');
        $constructions->update();
        return redirect('/constructionsIndex')->with('status', 'constructions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $constructions = Construction::find($id);
        // if ($category->image)
        // {
        //    $path = 'assets/images/uploads/Construction/'.$constructions->image;
        //    if (File::exists($path))
        //    {
        //        File::delete($path);
        //    }
        // }
        $constructions->delete();
        return redirect('/constructionsIndex')->with('status', 'constructions deleted successfully');
    }
}
