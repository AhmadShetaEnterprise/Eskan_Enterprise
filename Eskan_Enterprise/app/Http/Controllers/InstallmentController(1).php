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

    public function existsInstallmentMonth()
    {
        return '<h1>تم الدفع من قبل</h1><h1>او</h1><h1>ان احد المدخلات فارغة</h1>';
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
        $exist_installment_month = Installment::select('installment_month')->where([['customer_id', $installment->customer_id],['unit_id', $installment->unit_id]])->get();
        $month   = $request->input('month');
        $year   = $request->input('year');
        $installment->installment_month  = $month.'-'.$year;

            foreach ($exist_installment_month as $exist_installment) {
                $array_month = [];
                $months_array[] = $exist_installment->installment_month;
                if (in_array($installment->installment_month, $months_array)) {
                    return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
                    dd($installment->installment_month,$exist_installment->installment_month,$exist_installment_month);
                }

            }
            if (!$month && !$year) {
                $installment->installment_month  = $request->input('installment_month');
            }

            if ($month && !$year) {
                return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            } elseif (!$month && $year) {
                return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            }
            if (empty($request->input('installment_value'))) {
                return redirect('/existsInstallmentMonth')->with('status', 'Installment added successfully');
            } else {
                $installment->installment_value  = $request->input('installment_value');
            }
        $installment->property_id        = $request->input('property_id');
        $installment->main_project_id    = $request->input('main_project_id');
        $installment->construction_id    = $request->input('construction_id');
        $installment->level_id           = $request->input('level_id');
            dd($installment);
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
