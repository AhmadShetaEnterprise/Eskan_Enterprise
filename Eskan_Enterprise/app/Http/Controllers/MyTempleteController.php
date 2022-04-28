<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTempleteController extends Controller
{
///////////////////////////////////////////////
//* Display a listing of the resource.
///////////////////////////////////////////////    
    public function index()
    {
        $myTempletes = Templete::all();
        return view('myTempletesIndex', compact('myTempletes'));
    }
///////////////////////////////////////////////
//* Show the form for creating a new resource.
////////////////////////////////////////////////
    public function create()
    {
        return view('addMyTempletesIndex');
    }
////////////////////////////////////////////////
//* Store a newly created resource in storage.
////////////////////////////////////////////////
    public function store(Request $request)
    {
        $myTempletes = new Templete();

        $myTempletes->name = $request->input('name');
        $myTempletes->save();
        return redirect('/addMyTempletesIndex')->with('status', 'MyTempletesIndex added successfully');
    }
////////////////////////////////////////////////
//* Display the specified resource.
////////////////////////////////////////////////
    public function show($id)
    {
        //
    }
////////////////////////////////////////////////
//* Show the form for editing the specified resource.
////////////////////////////////////////////////
    public function edit($id)
    {
        $myTempletes = Templete::find($id);
        return view('editMyTempletesIndex', compact('myTempletes'));   
    }
////////////////////////////////////////////////
//* Update the specified resource in storage.
////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        $myTempletes = Templete::find($id);

        $myTempletes->name = $request->input('name');

        $myTempletes->update();
        return redirect('/myTempletesIndexIndex')->with('status', 'MyTempletesIndex Updated successfully'); 
    }
////////////////////////////////////////////////
//* Remove the specified resource from storage
////////////////////////////////////////////////
    public function destroy($id)
    {
        $myTempletes = Templete::find($id);

        $myTempletes->delete();
        return redirect('/myTempletesIndex')->with('status', 'MyTempletesIndex deleted successfully');   
    }
////////////////////////////////////////////////

}
