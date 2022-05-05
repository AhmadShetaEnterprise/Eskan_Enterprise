<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admins.customerIndex', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.customers.addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new Customer();
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

        $customers->name        = $request->input('name');
        $customers->age         = $request->input('age');
        $customers->gender      = $request->input('gender');
        $customers->phone       = $request->input('phone');
        $customers->email       = $request->input('email');
        $customers->save();
        return redirect('/addCustomer')->with('status', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customers = Customer::find($id);
        $units     = Customer::with('unit')->find($id)->unit;
        // $unitsJoin = Unit::join('customers' , 'customers.id', '=', 'units.customer_id')
        // ->join('constructions', 'constructions.id', '=', 'units.construction_id')
        // ->select('customers.*')
        // ->where('customers.id', 'units.customer_id')
        // ->get('units.name', 'customers.name', 'constructions.name');
        // $units = Customer::with(['unit'])->find($id);
        // $units     = Unit::all();
        return view('admins.customers.customerShow', compact('customers', 'units'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('admins.customers.editCustomer', compact('customers'));
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
        $customers = Customer::find($id);
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

        $customers->name        = $request->input('name');
        $customers->age         = $request->input('age');
        $customers->gender      = $request->input('gender');
        $customers->phone       = $request->input('phone');
        $customers->email       = $request->input('email');
        $customers->update();
        return redirect('/addCustomer')->with('status', 'Category added successfully');
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
