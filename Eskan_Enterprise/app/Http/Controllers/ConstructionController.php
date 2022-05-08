<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Property;
use App\Models\MainProject;
use App\Models\Construction;
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
        return view('admins.constructionsIndex', compact('constructions'));
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
        return view('admins.constructions.addconstruction', compact('properties', 'main_projects'));
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
        $constructions->units           = $request->input('units');
        $constructions->total_units     = $request->input('total_units');
        $constructions->coast           = $request->input('coast');
        $constructions->save();
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
        $units = Unit::select()->where('construction_id', '=', $construction_id)->get();

        return view('admins.constructions.showConstruction', compact('constructions', 'units'));
    }
    
    public function search($id)
    {
        $constructions = Construction::with('customers', 'main_projects')->find($id);
        $status =$_GET['status'];
        $units = Unit::find($id)->where([['construction_id', '=', $id],['status', '=', $status]])->get();

        return view('admins.constructions.searchConstruction', compact('constructions', 'units'));
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
        $constructions->main_project_id  = $request->input('main_project_id');
        $constructions->levels          = $request->input('levels');
        $constructions->units           = $request->input('units');
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
