<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Finance;
use App\Models\Payment;
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
        $payments  = Payment::all();

        return view('admins.installments.addInstallment', compact('units', 'customers', 'finances', 'payments'));
    }

    public function existsInstallmentMonth()
    {
        return '<h1>تم الدفع من قبل</h1><h1>او</h1><h1>ان احد المدخلات فارغة</h1><h1>او</h1><h1>ان العميل لم يكمل الدفعات الاساسية</h1>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $installment = new Installment();
        $installment->customer_id        = $request->input('customer_id');
        $installment->unit_id            = $request->input('unit_id');
        $unit_payments = Payment::select('payment_kind_id', 'residual')->where([['customer_id', $installment->customer_id],['unit_id', $installment->unit_id]])->get();
        foreach ($unit_payments as $unit_payment) {
            $payments_array[] = $unit_payment->payment_kind_id;
        }
        if (!in_array(4, $payments_array)) {
            return 
            '<h1>ان العميل لم يكمل الدفعات الاساسية</h1>' 
                        ;
            return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
        } 


        $exist_installment_month = Installment::select('installment_month')->where([['customer_id', $installment->customer_id],['unit_id', $installment->unit_id]])->get();
        $month   = $request->input('month');
        $year   = $request->input('year');
        $installment->installment_month  = $month.'-'.$year;

            foreach ($exist_installment_month as $exist_installment) {
                $array_month = [];
                $months_array[] = $exist_installment->installment_month;
                if (in_array($installment->installment_month, $months_array)) {
                    return '<h1>تم دفع قسط شهر'.$installment->installment_month.'من قبل</h1>';
                    // return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
                }

            }
            if (!$month && !$year) {
                $installment->installment_month  = $request->input('installment_month');
            }

            if ($month && !$year) {
                return '<h1>
                            ادخل العام
                        </h1>';

                // return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            } elseif (!$month && $year) {
                return '<h1>
                            ادخل الشهر
                        </h1>';
                // return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            }
            if (empty($request->input('installment_value'))) {
                return '<h1>
                            ادخل قيمة القسط
                        </h1>';
                // return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            } else {
                $installment->installment_value  = $request->input('installment_value');
            }

        $installment->residual            = $unit_payment->residual - $installment->installment_value;
        $installment->property_id        = $request->input('property_id');
        $installment->main_project_id    = $request->input('main_project_id');
        $installment->construction_id    = $request->input('construction_id');
        $installment->level_id           = $request->input('level_id');
        $installment->save();
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
