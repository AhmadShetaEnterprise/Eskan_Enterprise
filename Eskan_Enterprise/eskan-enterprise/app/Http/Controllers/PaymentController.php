<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Installment;
use App\Models\PaymentKind;
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
        $customers   = Customer::all(); 
        $finances    = Finance::all();
        $payments    = Payment::select()
                        ->where('unit_id', $id)
                        ->get();
        $paymentKinds = PaymentKind::all();
        $installments= Installment::select()
                        ->where('unit_id', $id)
                        ->get();
        return view('admins.payments.addUnitPayment', compact('units', 'unit', 'customer_id', 'customer', 'finances', 'payments', 'paymentKinds', 'customers'));
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
        $payment->payment_value      = $request->input('payment_value');
        $payment->installments       = $request->input('installments');
        $payment->installment_value  = $request->input('installment_value');
        $payment->customer_id        = $request->input('customer_id');
        $payment->unit_id            = $request->input('unit_id');
        $payment->property_id        = $request->input('property_id');
        $payment->main_project_id    = $request->input('main_project_id');
        $payment->construction_id    = $request->input('construction_id');
        $payment->level_id           = $request->input('level_id');

            $payment_value_before     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('payment_value');


            $allPayments = ($payment_value_before+$payment->payment_value);
            
        $payment->residual           = $payment->unit_price - $allPayments;
        $payment->discount           = $request->input('discount');
        $discount     = $payment->discount/100; 
        $payment->cash_payment       = $request->input('cash_payment');
            if ($discount) {
                $payment->cash_discount  = $payment->residual - ($payment->residual * $discount);
            }

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



        $payment->customer_id        = $request->input('customer_id');
        $payment->unit_id            = $request->input('unit_id');
        $payment->payment_kind_id    = $request->input('payment_kind_id');

        $unitStatus = Unit::select('status')->where('id', $payment->unit_id)->get();
        foreach ($unitStatus as $status) {
            if ($status->status == 'خالية' || $status->status == 'محجوزة') {
                return "يرجى الحجز اولا";
            }   
        }
        $existsPaymentKinds = Payment::select('payment_kind_id')->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->get();

        foreach ($existsPaymentKinds as $existsPaymentKind) {
            if ($existsPaymentKind->payment_kind_id == $payment->payment_kind_id) {
                return redirect('/existsInstallmentMonth')->with('status', 'Payment exists');
            }
        }
        $payment->unit_price         = $request->input('unit_price');
        $payment->finance_id         = $request->input('finance_id');
        $payment->payment_value      = $request->input('payment_value');
        $payment->installments       = $request->input('installments');
        $payment->installment_value  = $request->input('installment_value');
        $payment->property_id        = $request->input('property_id');
        $payment->main_project_id    = $request->input('main_project_id');
        $payment->construction_id    = $request->input('construction_id');
        $payment->level_id           = $request->input('level_id');

            $beforePayments     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->sum('payment_value');
            $existsPayments     = Payment::select('payment_kind_id')->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->get();

            foreach ($existsPayments as $existsPayment) {
                $paymentArray = [];
                $paymentArray[] = $existsPayment->payment_kind_id;                            
                if (in_array($payment->payment_kind_id, $paymentArray)) {
                    return redirect('/existsInstallmentMonth')->with('status', 'Payment exists');
                }
            }

            $allPayments = $beforePayments + $payment->payment_value;
// dd($beforePayments);
        $payment->residual           = $payment->unit_price - $allPayments;
        $payment->discount           = $request->input('discount');
        $discount     = $payment->discount/100; 
       
            if ($discount) {
                $payment->cash_payment  = $payment->residual - ($payment->residual * $discount);
            }

            $countPayments     = Payment::select()->where([['customer_id', $payment->customer_id], ['unit_id', $payment->unit_id]])->count('payment_value');

        // if($countPayments = 4 && empty($payment->installments)) {
        //     $payment->installments        = 60;
        //     $payment->installment_value    = $request->input('construction_id');
        // }
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
