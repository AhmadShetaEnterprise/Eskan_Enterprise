<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Admin;
use App\Models\Level;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Installment;
use App\Models\MainProject;
use App\Models\Construction;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property       = Property::all();
        $mainProjects   = MainProject::all();
        $constructions  = Construction::all();
        $units          = Unit::all();
        $levels         = Level::all();
        $finance        = Finance::all();
        $payments       = Payment::all();
        $installments   = Installment::all();
        $customers      = Customer::all();
        return view('admins.index', 
            compact('property', 'mainProjects', 'constructions', 'units', 'levels', 'finance', 'payments', 'installments', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.addCustomer');
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
        $customers->national_id = $request->input('national_id');
        $customers->privilege_id = $request->input('privilege_id');
        $customers->save();
        return redirect('/addCustomer')->with('status', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
