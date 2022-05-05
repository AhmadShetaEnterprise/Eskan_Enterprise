@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Edit Customer</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateConstruction/'.$constructions->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم المنشأة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" value="{{ $constructions->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">القسم</label>
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="property_id" value="{{ $constructions->property_id }}" required>
                        <input type="text" class="form-control  font-weight-bold text-dark"  value="{{ $constructions->property->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">المشروع</label>
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="mainProject_id" value="{{ $constructions->mainProject_id }}" required>
                        <input type="text" class="form-control  font-weight-bold text-dark"  value="{{ $constructions->mainProject->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الطوابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="levels" value="{{ $constructions->levels }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدات بالطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="units" value="{{ $constructions->units }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">كل الوحدات</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="total_units" value="{{ $constructions->total_units }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">التكلفة الكلية</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="coast" value="{{ $constructions->coast }}">
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
