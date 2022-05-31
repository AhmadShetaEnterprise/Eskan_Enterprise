<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Installment;
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
        $customers->national_id = $request->input('national_id');
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
        $customer = Customer::find($id);
        $units     = Customer::with('units')->find($id)->units;
        foreach ($units as $unit) {
            $unit_id = $unit->id;
        }
        $installment = Installment::with('customers', 'unit', 'constructions', 'property','main_projects')->find($id);
        $installments = Installment::select()->where('customer_id', $id)->get();

        $payments = Payment::select()->where('customer_id', $id)->get();
        foreach ($payments as $payment) {

        }
        // dd($payment);

        // $unitsJoin = Unit::join('customers' , 'customers.id', '=', 'units.customer_id')
        // ->join('constructions', 'constructions.id', '=', 'units.construction_id')
        // ->select('customers.*')
        // ->where('customers.id', 'units.customer_id')
        // ->get('units.name', 'customers.name', 'constructions.name');
        // $units = Customer::with(['unit'])->find($id);
        // $units     = Unit::all();
        foreach ($installments as $installment) {
            if (!empty($installment) || !is_null($installment)) {

                $months_array = [];
                $months_array[] = $installment->installment_month;
            } else {
                $months_array[] = ['hi', 'hi'];
            }
        }
        return view('admins.customers.customerShow', compact('customer', 'units', 'installments', 'payments'));
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
        $customers->national_id = $request->input('national_id');
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
