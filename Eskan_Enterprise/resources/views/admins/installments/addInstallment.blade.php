@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold"> اضافة اقساط  </h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertInstallment') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">نظام الدفع</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدة </label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="unit_id" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">العميل </label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="customer_id" required>
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
                        <input type="text" class="form-control  font-weight-bold text-dark" name="to_recieve_payment" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">قيمة الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="unit_coast" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">المتبقى</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="residual" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">عدد الاقساط</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="installments" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">قيمة القسط</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="installment_value" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">شهر </label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="installment_month" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الحالة </label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="status" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
