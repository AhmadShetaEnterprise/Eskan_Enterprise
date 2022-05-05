
   @extends('layouts.adminPanelApp')

   @section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">اضافة وحدة</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateUnit/'.$units->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">رقم الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" value="{{ $units->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="">القسم</label>
                        </div>
                        @foreach ( $properties as $property)
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="property_id" id="exampleRadios2" {{ $units->property_id == $property->id ? 'checked' : '' }} value="{{ $property->id }}">
                                {{ $property->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="">المشروع</label>
                        </div>
                        @foreach ( $mainProjects as $mainProject)
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="mainProject_id" id="exampleRadios2" {{ $units->mainProject_id == $mainProject->id ? 'checked' : '' }} value="{{ $mainProject->id }}">
                                {{ $mainProject->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="">المنشأة</label>
                        </div>
                            <select class="custom-select form-control  font-weight-bold text-dark" name="construction_id" >
                                <option>المنشأة</option>
                                @foreach ( $constructions as $construction)
                                <option value="{{ $construction->id }}" {{ $units->construction_id == $construction->id ? 'selected' : '' }} >{{ $construction->name }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">رقم الطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="level_id" value="{{ $units->level_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الموقع</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="site" value="{{ $units->site }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">المساحة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="space" value="{{ $units->space }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">سعر المتر</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="price_m" value="{{ $units->price_m }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">سعر الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="total_price" value="{{ $units->total_price }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوصف</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="unitDescription" value="{{ $units->unitDescription }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">حالة الوحدة</label>
                        <select class="custom-select form-control  font-weight-bold text-dark" name="status" >
                            <option value="خالية"   {{ $units->status == 'خالية' ? 'selected' : '' }}>خالية</option>
                            <option value="محجوزة" {{ $units->status == 'محجوزة' ? 'selected' : '' }}>محجوزة</option>
                            <option value="تعاقد"   {{ $units->status == 'تعاقد' ? 'selected' : '' }}>تعاقد</option>
                            <option value="ملغاة"   {{ $units->status == 'ملغاة' ? 'selected' : '' }}>ملغاة</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">العميل</label>
                        <select class="custom-select form-control  font-weight-bold text-dark" name="customer_id" >
                            <option  selected value="0">عميل</option>
                            @foreach ( $customers as $customer)
                            <option value="{{ $customer->id }}" {{ $units->customer_id == $customer->id ? 'selected' : '' }} >{{ $units->customer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضافة</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection
