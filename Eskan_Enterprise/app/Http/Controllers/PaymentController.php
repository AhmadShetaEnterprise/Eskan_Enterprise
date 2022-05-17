<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\Customer;
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
        
        $units     = Unit::all();
        $customers = Customer::all();
        $finances  = Finance::all();
        
        return view('admins.payments.addPayment', compact('units', 'customers', 'finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUnitPayment($id)
    {
        
        $units       = Unit::all();
        $unit        = Unit::find($id);
        $customer_id = Unit::select('customer_id')->where('id', $id)->get();
        $customer    = Customer::find($customer_id); 
        $finances    = Finance::all();
        $finance     = Payment::select()->where('unit_id', $id)->get();
        return view('admins.payments.addUnitPayment', compact('units', 'unit', 'customer_id', 'customer', 'finances', 'finance'));
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
        $payment->finance_id         = $request->input('finance_id');
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
            $licences_payment  = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('licences_payment');
            $start_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('start_payment');
            $recieving_payment = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('recieving_payment');


            $countPayments = ($space_payment+$licences_payment+$start_payment+$recieving_payment);
                $currentPayment = ($request->input('space_payment')
                +$request->input('licences_payment')
                +$request->input('start_payment')
                +$request->input('recieving_payment'));
            
            $allPayments = $countPayments + $currentPayment;

        $payment->residual           = $payment->unit_price - $allPayments;
        $payment->discount           = $request->input('discount');
            $discount     = $payment->discount/100; 
        $payment->cash_payment       = $request->input('cash_payment');
            if ($discount) {
                $payment->cash_discount  = $payment->residual - ($payment->residual * $discount);
            }
        // dd($payment->residual);
        $payment->save();

        return redirect('/paymentsIndex')->with('status', 'Payment added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUnitPayment(Request $request)
    {
        $payment = new Payment();

        $payment->unit_price         = $request->input('unit_price');
        $payment->finance_id         = $request->input('finance_id');
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
            $licences_payment  = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('licences_payment');
            $start_payment     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('start_payment');
            $recieving_payment = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('recieving_payment');


            $countPayments = ($space_payment+$licences_payment+$start_payment+$recieving_payment);
                $currentPayment = ($request->input('space_payment')
                +$request->input('licences_payment')
                +$request->input('start_payment')
                +$request->input('recieving_payment'));
            
            $allPayments = $countPayments + $currentPayment;

        $payment->residual           = $payment->unit_price - $allPayments;
        $payment->discount           = $request->input('discount');
            $discount     = $payment->discount/100; 
        $payment->cash_payment       = $request->input('cash_payment');
            if ($discount) {
                $payment->cash_discount  = $payment->residual - ($payment->residual * $discount);
            }
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
