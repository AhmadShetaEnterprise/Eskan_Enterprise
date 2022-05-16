<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Finance;
use App\Models\Customer;
use App\Models\Installment;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $installments = Installment::all();
        return view('admins.installmentsIndex', compact('installments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $units     = Unit::all();
        $customers = Customer::all();
        $finances  = Finance::all();

        return view('admins.installments.addInstallment', compact('units', 'customers', 'finances'));       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $installments = new Installment();

        $installments->installment_value  = $request->input('installment_value');
        $installments->installment_month  = $request->input('installment_month');
        $installments->customer_id        = $request->input('customer_id');
        $installments->unit_id            = $request->input('unit_id');
        $installments->property_id        = $request->input('property_id');
        $installments->main_project_id    = $request->input('main_project_id');
        $installments->construction_id    = $request->input('construction_id');
        $installments->level_id           = $request->input('level_id');
        
        $installments->save();
        return redirect('/installmentsIndex')->with('status', 'Installment added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Installment = Installment::with('customers', 'unit', 'constructions', 'property','main_projects')->find($id);
        $customer_id = $customers->id;
        $units = Unit::select()->where('customer_id', $customer_id)->get();

        return view('admins.constructions.showConstruction', compact('Installment', 'units'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function edit(Installment $installment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Installment $installment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Installment $installment)
    {
        //
    }
}
