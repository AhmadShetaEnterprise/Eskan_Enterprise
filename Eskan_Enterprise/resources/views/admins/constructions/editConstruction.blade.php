@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Add Customer</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertConstruction') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم المنشأة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" value="" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">القسم</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="property_id" value="{{ $construction->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">المشروع</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="mainProject_id" value="{{ $construction->property_id }}" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">الطوابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="levels" value="{{ $construction->mainProject_id }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدات بالطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="units" value="{{ $construction->levels }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">كل الوحدات</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="total_units" value="{{ $construction->units }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">التكلفة الكلية</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="coast" value="{{ $construction->total_units }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">صورة</label>
                        <input type="file" name="image" class="form-control  font-weight-bold text-dark">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
