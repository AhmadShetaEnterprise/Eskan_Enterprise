
   @extends('layouts.adminPanelApp')

   @section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">حجز وحدة</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertPayment/'.$units->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">قيمة الوحدة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="unit_price" value="{{ $units->unit_price }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">نظام الدفع</label>
                        <select class="custom-select form-control  font-weight-bold text-dark" name="finance_id" >
                            <option value="">اختر</option>
                            @foreach ($finances as $finance)
                                @foreach ($payments as $payment)

                                @if ((!$payment))
                                <option value="{{ $finance->id }}">{{ $finance->name }}</option>

                                @else
                                <option value="{{ $finance->id }}"   {{ $payment->finance_id == $finance->id ? 'selected' : '' }}>{{ $finance->name }}</option>

                                @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="">دفعة ارض</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="space_payment" value="">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تراخيص</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="licences_payment" value="" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة بدأ أعمال</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="start_payment" value="">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">دفعة تسليم</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="recieving_payment" value="">
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">رقم الوحدة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="name" value="{{ $units->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">القسم</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="property_id" value="{{ $units->property_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المشروع</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="main_project_id" value="{{ $units->main_project_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المنشأة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="construction_id" value="{{ $units->construction_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">رقم الطابق</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="level_id" value="{{ $units->level_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">الموقع</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="site" value="{{ $units->site }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المساحة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="space" value="{{ $units->space }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">سعر المتر</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="price_m" value="{{ $units->price_m }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">الوصف</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="unitDescription" value="{{ $units->unitDescription }}" required>
                    </div>


                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضافة</button>
                    </div>
                </div>
            </form>
            <form action="{{ url('updateStatusUnit/'.$units->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

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
                        <select data-show-subtext="true" data-live-search="true" class="selectpicker btn btn-primary w-100" name="customer_id" id="search-select">
                            <option selected value="0">عميل</option>                          
                            @foreach ( $customers as $customer)
                            <option data-subtext="{{ $customer->phone }}" value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">رقم الوحدة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="name" value="{{ $units->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">القسم</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="property_id" value="{{ $units->property_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المشروع</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="main_project_id" value="{{ $units->main_project_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المنشأة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="construction_id" value="{{ $units->construction_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">رقم الطابق</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="level_id" value="{{ $units->level_id }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">الموقع</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="site" value="{{ $units->site }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">المساحة</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="space" value="{{ $units->space }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">سعر المتر</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="price_m" value="{{ $units->price_m }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        {{-- <label for="">الوصف</label> --}}
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="unitDescription" value="{{ $units->unitDescription }}" required>
                    </div>


                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضافة</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection
