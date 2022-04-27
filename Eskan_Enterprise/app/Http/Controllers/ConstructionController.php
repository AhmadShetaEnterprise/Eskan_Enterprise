<?php

namespace App\Http\Controllers;

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
        $project = Construction::all();
        return view('admins.constructionsIndex', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.constructionsIndex?do=addConstruction');
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
        //     $customer->image = $filename;
        // }
        // if ($request->input('email')->exists())
        // {
        //     alert('email exists');
        // }

        $constructions->name            = $request->input('name');
        $constructions->property_id     = $request->input('property_id');
        $constructions->mainProject_id  = $request->input('mainProject_id');
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
        $construction = Construction::find($id);
        return view('admins.constructionsIndex?do=editConstruction', compact('construction'));
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
        //
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
