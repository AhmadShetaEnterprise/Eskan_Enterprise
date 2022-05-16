@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">اضافة قسط </h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertPayment') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدة </label>
                        <select name="unit_id" id="" class="custom-select form-control  font-weight-bold text-dark" required>
                            <option value="">الوحدات</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach                          
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">قيمة الوحدة</label>
                        <input type="text" value="" class="form-control  font-weight-bold text-dark" name="unit_price" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">العميل </label>
                        <select name="customer_id" id="" class="custom-select form-control  font-weight-bold text-dark" required>
                            <option value="">العميل</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach                          
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">نظام الدفع</label>
                        <select name="finance_id" id="" class="custom-select form-control  font-weight-bold text-dark" required>
                            <option value="">نظام الدفع</option>
                            @foreach ($finances as $finance)
                                <option value="{{ $finance->id }}">{{ $finance->name }}</option>
                            @endforeach                          
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة ارض</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="space_payment" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تراخيص</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="licences_payment" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة بدأ أعمال</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="start_payment" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تسليم</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="recieving_payment" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">المتبقى</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="residual" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">خصم نقدي </label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="discount" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">عدد الاقساط</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="installments" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">قيمة القسط</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="installment_value" >
                    </div>

                    <div class="col-md-6 mb-3">
                            {{-- <label for="">القسم</label> --}}
                            <input class="form-check-input mr-2" type="hidden" name="property_id" id="exampleRadios2" value="1">
                    </div>

                    <div class="col-md-6 mb-3">
                            {{-- <label for="">المشروع</label> --}}
                            <input class="form-check-input mr-2" type="hidden" name="main_project_id" id="exampleRadios2" value="1">
                    </div>

                    <div class="col-md-6 mb-3">
                            {{-- <label for="">المنشأة</label> --}}
                            <input class="form-check-input mr-2" type="hidden" name="construction_id" id="exampleRadios2" value="1">
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">رقم الطابق</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="level_id" value="1" required>
                    </div>


                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
