<?php

namespace App\Http\Controllers;

use App\Models\ManagerFund;
use Illuminate\Http\Request;

class ManagerFundController extends Controller
{
    ///////////////////////////////////////////////
    //* Display a listing of the resource.
    ///////////////////////////////////////////////    
    public function index()
    {
        $managerFunds        = ManagerFund::all();
        $incomingPersonal    = ManagerFund::select('value')->where([['kind', 0],['category', 0]])->sum('value');
        $outgoinPersonal     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
        $incomingCompany     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
        $outgoinCompany      = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->sum('value');
        $incomingFunds       = $incomingPersonal + $incomingCompany;
        $outgoingFunds       = $outgoinPersonal + $outgoinCompany;

        return view('admins.managerFundIndex', compact('managerFunds' , 'incomingPersonal', 'outgoinPersonal', 'incomingCompany', 'outgoinCompany', 'incomingFunds', 'outgoingFunds'));
    }
    ///////////////////////////////////////////////
    //* Show the form for creating a new resource.
    ////////////////////////////////////////////////
    public function create()
    {
        return view('admins.manager.addManagerFund');
    }
    ////////////////////////////////////////////////
    //* Store a newly created resource in storage.
    ////////////////////////////////////////////////
    public function store(Request $request)
    {
        $managerFund = new ManagerFund();

        $managerFund->kind = $request->input('kind');
        $managerFund->category = $request->input('category');
        $managerFund->value = $request->input('value');
        $managerFund->comment = $request->input('comment');
        $managerFund->save();
        return redirect('/managerFundIndex')->with('status', 'Manager Fund added successfully');
    }
    ////////////////////////////////////////////////
    //* Display the specified resource.
    ////////////////////////////////////////////////
    public function show($id)
    {
        //
    }
    ////////////////////////////////////////////////
        //* Search the specified resource.
    ////////////////////////////////////////////////
    public function search($id)
    {
        $incomingPersonal    = ManagerFund::select('value')->where([['kind', 0],['category', 0]])->sum('value');
        $outgoinPersonal     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
        $incomingCompany     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
        $outgoinCompany      = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->sum('value');
        $incomingFunds       = $incomingPersonal + $incomingCompany;
        $outgoingFunds       = $outgoinPersonal + $outgoinCompany;
        $managerFunds = ManagerFund::select()->where('category', $id)->get();
        return view('admins.managerFundIndex', compact('managerFunds', 'incomingPersonal', 'outgoinPersonal', 'incomingCompany', 'outgoinCompany', 'incomingFunds', 'outgoingFunds'));
    }
    ////////////////////////////////////////////////
    //* Show the form for editing the specified resource.
    ////////////////////////////////////////////////
    public function edit($id)
    {
        $myTempletes = TempleteModalName::find($id);
        return view('editMyTempletesIndex', compact('myTempletes'));   
    }
    ////////////////////////////////////////////////
    //* Update the specified resource in storage.
    ////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        $myTempletes = TempleteModalName::find($id);

        $myTempletes->name = $request->input('name');

        $myTempletes->update();
        return redirect('/myTempletesIndexIndex')->with('status', 'MyTempletesIndex Updated successfully'); 
    }
    ////////////////////////////////////////////////
    //* Remove the specified resource from storage
    ////////////////////////////////////////////////
    public function destroy($id)
    {
        $myTempletes = TempleteModalName::find($id);

        $myTempletes->delete();
        return redirect('/myTempletesIndex')->with('status', 'MyTempletesIndex deleted successfully');   
    }
    ////////////////////////////////////////////////

}
