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
        $outgoingPersonal     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
        $incomingCompany     = ManagerFund::select('value')->where([['kind', 0],['category', 1]])->sum('value');
        $outgoingCompany      = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->sum('value');
        $incomingFunds       = $incomingPersonal + $incomingCompany;
        $outgoingFunds       = $outgoingPersonal + $outgoingCompany;

        return view('admins.managerFundIndex', compact('managerFunds' , 'incomingPersonal', 'outgoingPersonal', 'incomingCompany', 'outgoingCompany', 'incomingFunds', 'outgoingFunds'));
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

        $managerFund->kind     = $request->input('kind');
        $managerFund->category = $request->input('category');
        $managerFund->value    = $request->input('value');
        $managerFund->comment  = $request->input('comment');
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
        if (isset($_GET['day_from']) && isset($_GET['day_to']) && empty($_GET['one_day'])) {
            if (empty($_GET['day_to'])) {
                $day_from = $_GET['day_from'];
                $day_to   = date('Y-m-d');
            }else {
                
                $day_from = $_GET['day_from'];
                $day_to   = $_GET['day_to'];
            }
            $incomingPersonal   = ManagerFund::select('value')->where([['kind', 0],['category', 0]])->whereBetween('created_at', [$day_from, $day_to])->sum('value');
            $outgoingPersonal   = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->whereBetween('created_at', [$day_from, $day_to])->sum('value');
            $incomingCompany    = ManagerFund::select('value')->where([['kind', 0],['category', 1]])->whereBetween('created_at', [$day_from, $day_to])->sum('value');
            $outgoingCompany    = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->whereBetween('created_at', [$day_from, $day_to])->sum('value');
            $incomingFunds      = $incomingPersonal  + $incomingCompany;
            $outgoingFunds      = $outgoingPersonal  + $outgoingCompany;
            // dd($incomingFunds, $outgoingFunds);

            $managerFunds  = ManagerFund::select()->whereBetween('created_at', [$day_from, $day_to])->get();
        } elseif (isset($_GET['one_day']) && !empty($_GET['one_day'])) {
            $one_day = $_GET['one_day'];
            
            $incomingPersonal   = ManagerFund::select('value')->where([['kind', 0],['category', 0]])->whereDate('created_at', '=', $one_day)->sum('value');
            $outgoingPersonal   = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->whereDate('created_at', '=', $one_day)->sum('value');
            $incomingCompany    = ManagerFund::select('value')->where([['kind', 0],['category', 1]])->whereDate('created_at', $one_day)->sum('value');
            $outgoingCompany    = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->whereDate('created_at', $one_day)->sum('value');
            $incomingFunds      = $incomingPersonal  + $incomingCompany;
            $outgoingFunds      = $outgoingPersonal  + $outgoingCompany;

            $managerFunds  = ManagerFund::select()->whereDate('created_at', $one_day)->get();

        }else {
            
            $incomingPersonal     = ManagerFund::select('value')->where([['kind', 0],['category', 0]])->sum('value');
            $outgoingPersonal     = ManagerFund::select('value')->where([['kind', 1],['category', 0]])->sum('value');
            $incomingCompany     = ManagerFund::select('value')->where([['kind', 0],['category', 1]])->sum('value');
            $outgoingCompany      = ManagerFund::select('value')->where([['kind', 1],['category', 1]])->sum('value');
            $incomingFunds       = $incomingPersonal + $incomingCompany;
            $outgoingFunds       = $outgoingPersonal  + $outgoingCompany;

            $managerFunds = ManagerFund::select()->where([['category', $id],['created_at', '>=', date('Y-m-d').' 00:00:00']])->get();
        }
        return view('admins.managerFundIndex', compact('managerFunds', 'incomingPersonal', 'outgoingPersonal', 'incomingCompany', 'outgoingCompany', 'incomingFunds', 'outgoingFunds'));
    }
    ////////////////////////////////////////////////
    //* Show the form for editing the specified resource.
    ////////////////////////////////////////////////
    public function edit($id)
    {
        $managerFund = ManagerFund::find($id);
        return view('admins.manager.editManagerFund', compact('managerFund')); 
    }
    ////////////////////////////////////////////////
    //* Update the specified resource in storage.
    ////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        $managerFund = ManagerFund::find($id);

        $managerFund->kind     = $request->input('kind');
        $managerFund->category = $request->input('category');
        $managerFund->value    = $request->input('value');
        $managerFund->comment  = $request->input('comment');

        $managerFund->update();
        return redirect('/managerFundIndex')->with('status', 'ManagerFund Updated successfully'); 
    }
    ////////////////////////////////////////////////
    //* Remove the specified resource from storage
    ////////////////////////////////////////////////
    public function destroy($id)
    {
        $myTempletes = ManagerFund::find($id);

        $myTempletes->delete();
        return redirect('/managerFundIndex')->with('status', 'ManagerFund deleted successfully');   
    }
    ////////////////////////////////////////////////

}
