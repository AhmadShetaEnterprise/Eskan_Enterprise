<?php

namespace App\Http\Controllers;

use App\Models\PaymentKind;
use Illuminate\Http\Request;

class PaymentKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentKinds = PaymentKind::all();

        return view('admins.paymentKindsIndex', compact('paymentKinds'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.payments.addPaymentKind');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymentkind = new PaymentKind();

        $paymentkind->name         = $request->input('name');
        $paymentkind->save();

        return redirect('/paymentKindsIndex')->with('status', 'Payment added successfully');
    }
}
