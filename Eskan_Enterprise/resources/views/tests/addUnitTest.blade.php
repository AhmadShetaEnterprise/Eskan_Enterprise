
   @extends('layouts.adminPanelApp')

   @section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">اضافة وحدة</h1>
        </div>
        <div class="card-body">
            <div class="col-lg-12 addRow"><a class="btn btn-primary" href="javascript:;">+</a></div>
            <form action="{{ url('insertUnit') }}" method="POST" enctype="multipart/form-data" class="thead">
                @csrf
                <div class="row d-inline-flex">
                    <div class="col-lg-1">
                        <label for="">رقم الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="name" required>
                    </div>

                    <div class="col-lg-1">
                        <div>
                            <label for="">القسم</label>
                        </div>
                        <select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="construction_id" >
                            <option selected>القسم</option>
                            @foreach ( $properties as $property)
                            <option value="{{ $property->id }}">{{ $property->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <div>
                            <label for="">المشروع</label>
                        </div>
                        <select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="construction_id" >
                            <option selected>المشروع</option>
                            @foreach ( $main_projects as $main_project)
                            <option value="{{ $main_project->id }}">{{ $main_project->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <div>
                            <label for="">المنشأة</label>
                        </div>
                            <select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="construction_id" >
                                <option selected>المنشأة</option>
                                @foreach ( $constructions as $construction)
                                <option value="{{ $construction->id }}">{{ $construction->name }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="col-lg-1">
                        <label for="">رقم الطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="level_id" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">الموقع</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="site" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">المساحة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="space" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">سعر المتر</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="price_m" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">سعر الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="unit_price" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">الوصف</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="unitDescription" required>
                    </div>

                    <div class="col-lg-1">
                        <label for="">حالة الوحدة</label>
                        <select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="status" >
                            <option selected value="خالية">خالية</option>
                            <option value="محجوزة">محجوزة</option>
                            <option value="تعاقد">تعاقد</option>
                            <option value="ملغاة">ملغاة</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <label for="">العميل</label>
                        <select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="customer_id" >
                            <option  selected value="0">عميل</option>
                            @foreach ( $customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
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
