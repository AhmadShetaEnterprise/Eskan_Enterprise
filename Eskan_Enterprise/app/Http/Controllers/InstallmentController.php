<?php

namespace App\Http\Controllers;

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
        return view('admins.installments.addInstallment');       
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

        $installments->name               = $request->input('name');
        $installments->space_payment      = $request->input('space_payment');
        $installments->licences_payment   = $request->input('licences_payment');
        $installments->start_payment      = $request->input('start_payment');
        $installments->to_recieve_payment = $request->input('to_recieve_payment');
        $installments->unit_coast         = $request->input('unit_coast');
        $installments->residual           = $request->input('residual');
        $installments->installments       = $request->input('installments');
        $installments->installment_value  = $request->input('installment_value');
        $installments->installment_month  = $request->input('installment_month');
        $installments->status             = $request->input('status');
        $installments->customer_id        = $request->input('customer_id');
        $installments->unit_id        = $request->input('unit_id');
        $installments->save();
        return redirect('/installmentsIndex')->with('status', 'Finance added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function show(Installment $installment)
    {
        //
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
