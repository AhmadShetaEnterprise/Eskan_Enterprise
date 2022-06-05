<?php

namespace App\Http\Controllers;

use App\Models\Privilege;
use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privileges = Privilege::all();
        return view('admins.privilegesIndex', compact('privileges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.privilegesIndex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $privilege = new Privilege();

        $privilege->name            = $request->input('name');
        $privilege->code        = $request->input('code');
        $privilege->save();
        return redirect('/privilegesIndex')->with('status', 'Privilege added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Http\Response
     */
    public function show(Privilege $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privilege = Privilege::find($id);
        return view('admins.privileges.editPrivilege', compact('privilege'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $privilege = Privilege::find($id);

        $privilege->name        = $request->input('name');
        $privilege->code        = $request->input('code');
        $privilege->update();
        return redirect('/privilegesIndex')->with('status', 'Privilege updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privilege $id)
    {
        $privilege = Privilege::find($id);

        $privilege->delete();
        return redirect('/privilegesIndex')->with('status', 'Privilege deleted successfully');
    }
}
