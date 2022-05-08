<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
///////////////////////////////////////////////
//* Display a listing of the resource.
///////////////////////////////////////////////    
    public function index()
    {
        $levels = Level::all();
        return view('admins.levelsIndex', compact('levels'));
    }
///////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
    public function create()
    {
        return view('admins.constructions.addLevel');
    }
////////////////////////////////////////////////
//* Store a newly created resource in storage.
////////////////////////////////////////////////
    public function store(Request $request)
    {
        $levels = new Level();

        $levels->name = $request->input('name');
        $levels->save();
        return redirect('/levelsIndex')->with('status', 'Level added successfully');
    }
////////////////////////////////////////////////
//* Display the specified resource.
////////////////////////////////////////////////
    public function showLevel($id,$constructions)
    {
        $level = Unit::select()->where('construction_id', '=', $constructions)->offset($id*4)->limit(4)->get();
        return view('admins.constructions.showLevel', compact('level'));
    }
////////////////////////////////////////////////
//* Display the specified resource.
////////////////////////////////////////////////
    public function show($id)
    {
        $level = Level::with('units')->find($id);
        return view('admins.constructions.showLevel', compact('level'));

        // return view('admins.constructions.singleLevel', compact('level'));
    }
////////////////////////////////////////////////
//* Show the form for editing the specified resource.
////////////////////////////////////////////////
    public function edit($id)
    {
        $levels = Level::find($id);
        return view('admins.constructions.editLevel', compact('levels'));   
    }
////////////////////////////////////////////////
//* Update the specified resource in storage.
////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        $levels = Level::find($id);

        $levels->name        = $request->input('name');

        $levels->update();
        return redirect('/levelsIndex')->with('status', 'Level Updated successfully'); 
    }
////////////////////////////////////////////////
//* Remove the specified resource from storage
////////////////////////////////////////////////
    public function destroy($id)
    {
        $levels = Level::find($id);

        $levels->delete();
        return redirect('/levelsIndex')->with('status', 'Level deleted successfully');   
    }
////////////////////////////////////////////////

}
