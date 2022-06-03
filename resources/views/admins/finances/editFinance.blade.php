@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">اضافة نظام دفع</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateFinance') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">نظام الدفع</label>
                        <input type="text" value="{{ $finance->name }}" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة ارض</label>
                        <input type="text" value="{{ $finance->space_payment }}" class="form-control  font-weight-bold text-dark" name="space_payment" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تراخيص</label>
                        <input type="text" value="{{ $finance->licences_payment }}" class="form-control  font-weight-bold text-dark" name="licences_payment" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة بدأ أعمال</label>
                        <input type="text" value="{{ $finance->start_payment }}" class="form-control  font-weight-bold text-dark" name="start_payment" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تسليم</label>
                        <input type="text" value="{{ $finance->recieving_payment }}" class="form-control  font-weight-bold text-dark" name="recieving_payment" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
