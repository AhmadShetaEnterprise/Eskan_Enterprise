<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('admins.paymentsIndex', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.payments.addPayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = new Payment();

        $payment->unit_price         = $request->input('unit_price');
        $payment->finances_name      = $request->input('finances_name');
        $payment->space_payment      = $request->input('space_payment');
        $payment->licences_payment   = $request->input('licences_payment');
        $payment->start_payment      = $request->input('start_payment');
        $payment->recieving_payment  = $request->input('recieving_payment');
        $payment->installments       = $request->input('installments');
        $payment->installment_value  = $request->input('installment_value');
        $payment->customer_id        = $request->input('customer_id');
        $payment->unit_id            = $request->input('unit_id');
        $payment->property_id        = $request->input('property_id');
        $payment->main_project_id    = $request->input('main_project_id');
        $payment->construction_id    = $request->input('construction_id');
        $payment->level_id           = $request->input('level_id');

        $space_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('space_payment');
        $licences_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('licences_payment');
        $start_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('start_payment');
        $recieving_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('recieving_payment');


        $countPayments = ($space_payment+$licences_payment+$start_payment+$recieving_payment);
            $currentPayment = ($request->input('space_payment')
            +$request->input('licences_payment')
            +$request->input('start_payment')
            +$request->input('recieving_payment'));


        $payment->residual           = $payment->unit_price-$countPayments - $currentPayment;
        // dd($payment->residual);
        $payment->save();
        return redirect('/paymentsIndex')->with('status', 'Payment added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
