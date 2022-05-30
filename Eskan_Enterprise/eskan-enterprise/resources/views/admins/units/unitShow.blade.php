@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger row">
            <div class="col-lg-4">
                <img src="..." class="card-img-top" alt="...">
            </div>

            <div class="col-lg-4">
                <h1 class=" bg-primary">
                    {{$unit->name}}
                </h1>
            </div>

            <div class="col-lg-4">
                <a href="{{ url('searchConstruction/'.$unit->constructions->id.'/?status='.$unit->status) }} "
                @if ($unit->status == 'خالية') class="btn btn-success m-2" style="width: 125px;height: 40px"
                @elseif ($unit->status == 'تعاقد') class="btn btn-danger m-2" style="width: 125px;height: 40px"
                @elseif ($unit->status == 'محجوزة') class="btn btn-warning m-2" style="width: 125px;height: 40px"
                @else class="btn btn-outline-danger m-2" style="width: 125px;height: 40px"
                @endif
                    class="btn btn-outline-info m-2" style="width: 125px;height: 40px">{{$unit->status}}
                </a>
            </div>
        </div>
        <div class="">
            <div class="card-body col-lg-12"  style="width: 20rem;">
                <div class="col-lg-8">
                    <table>
                        <thead>
                            <tr>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">
                                    {{-- {{ $units->constructions->status }} --}}
                                @if (!empty($unit))

                                    @if ($unit->status == 'خالية') حجز

                                    @elseif ($unit->status == 'تعاقد') العميل

                                    @elseif ($unit->status == 'محجوزة') العميل

                                    @elseif ($unit->status == 'محجوزة') العميل

                                    @else حجز

                                    @endif

                                @else العميل

                                @endif

                                </h6>
                                </th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">النشروع الرئيسي </h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">المنشأة  </h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">الموقع</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">المساحة</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر المتر</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر الوحدة</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">الدور</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- <td><a href="{{ url('unitShow/'.$unit->id) }}" class="btn btn-primary m-2" style="width: 125px">{{$unit->name}}</a></td> --}}
                            @if ($unit->status == 'خالية')
                                <td>
                                    <a href="{{ url('editUnitStatus/'.$unit->id) }}" class="btn btn-outline-success m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                                @elseif ($unit->status == 'تعاقد')
                                <td>
                                    <a href="{{ url('customerShow/'.$unit->customers->id) }}" class="btn btn-outline-danger m-2 d-inline-block" style="font-size:1vw;">
                                        {{$unit->customers->name}}
                                    </a>
                                </td>
                                @elseif ($unit->status == 'محجوزة')
                                <td>
                                    <a href="{{ url('customerShow/'.$unit->customers->id) }}" class="btn btn-outline-warning m-2" style="width: 125px">
                                        {{$unit->customers->name}}
                                    </a>
                                </td>
                                @else
                                <td>
                                    <a href="{{ url('editUnitStatus/'.$unit->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                            @endif
                                <td><a href="{{ url('show_main_project/'.$unit->main_projects->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$unit->main_projects->name}}</a></td>
                                <td><a href="{{ url('show_main_project/'.$unit->constructions->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$unit->constructions->name}}</a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->site}}</a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->space}}</a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->price_m}}</a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->unit_price}}</a></td>
                                <td><a href="{{ route('showLevel', ['id'=>$unit->level_id-1, 'constructions'=>$unit->constructions->id]) }}" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->levels->name}}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>المدفوعات</h3>
                <td><a href="#" class="btn btn-info m-2" style="width: 125px">قيمة الوحدة</a> </td>--------->
                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->unit_price}}</a> </td>

                <table>
                    <thead>
                        <tr>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المدفوع</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">اسم الدفعة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">اجمالي الدفعات</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المتبقي</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">نظام الدفع</h6></th>
                        </tr>
                    </thead>
                    <tbody>

                    @if (isset($payments)  && $payments->isNotEmpty())
                        @foreach ($payments as $payment)

                            {{-- {{dd($payment)}} --}}
                            <tr>
                                @if (is_null($payment->finance) || $payments->isNotEmpty())
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">لا يوجد  </a> </td>

                                @else
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{ $payment->payment_value}}</a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{ $payment->paymentKind->name}}</a> </td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{ $payment->unit->unit_price - $payment->residual}}</a> </td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$payment->residual}}</a> </td>
                                @if (is_null($payment->finance))

                                <td><a href="" class="btn btn-outline-info m-2" style="width: 125px">لا يوجد  </a></td>
                                @else
    
                                <td><a href="{{ url('financeShow/'.$payment->finance_id) }}" class="btn btn-outline-info m-2" style="width: 125px">{{$payment->finance->name}}</a></td>
                                @endif
                            </tr>
                            @endif
                            </tr>
                        @endforeach


                        @for ($i = 0; $i < $count=  $payment->installments; $i++)
                        @endfor



                        @if (isset($installments) && !empty($installments))
                            @foreach ($installments as $installment)
                                @php
                                    $months_array = [];
                                    $months_array[] = $installment->installment_month;
                                @endphp
                            @endforeach
                            @if (!empty($months_array))
                        <tr>
                            <td>
                                <div class="d-inline-flex">
                                        <input type="text" name="" class="form-control m-1" style="width: 125px" value="{{ $payment->installment_value }}">
                                        <input type="text" name="" class="form-control m-1" style="width: 125px" value="{{ date('m-Y') }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->customer_id }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->unit_id }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->property_id }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->main_project_id }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->construction_id }}">
                                        <input type="hidden" name="" class="form-control" value="{{ $payment->level_id }}">
                                    <a type="" class="btn btn-success mt-1 text-dark" style="width: 200px;height:40px">تم دفع شهر{{ date('m-Y') }}</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                        <tr>
                            <td>
                                <form action="{{ url('insertInstallment') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-inline-flex">
                                            <input type="text" name="installment_value" class="form-control m-1" style="width: 125px" value="{{ $payment->installment_value }}">
                                            {{-- <input type="text" name="installment_month" class="form-control m-1" style="width: 125px" value="" placeholder="دفع شهر اخر"> --}}
                                            <div class="d-inline-flex m-1">
                                                <select class="folm-select " name="month" id="" style="width: 50px;height:40px">
                                                    <option value="">شهر</option>
                                                    @php
                                                        $months = ['01','02','03','04','05','06','07','08','09','10','11','12']
                                                    @endphp
                                                    @foreach ($months as $month)
                                                        <option value="{{ $month }}">{{ $month }}</option>
                                                    @endforeach
                                                </select>
                                                <select class="folm-select ml-1" name="year" id="" style="width: 100px;height:40px">
                                                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="customer_id" class="form-control" value="{{ $payment->customer_id }}">
                                            <input type="hidden" name="unit_id" class="form-control" value="{{ $payment->unit_id }}">
                                            <input type="hidden" name="property_id" class="form-control" value="{{ $payment->property_id }}">
                                            <input type="hidden" name="main_project_id" class="form-control" value="{{ $payment->main_project_id }}">
                                            <input type="hidden" name="construction_id" class="form-control" value="{{ $payment->construction_id }}">
                                            <input type="hidden" name="level_id" class="form-control" value="{{ $payment->level_id }}">
                                        <button type="submit" class="btn btn-warning mt-1" style="width: 200px;height:40px">دفع شهر اخر</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                            @else

                        <tr>
                            <td>
                                <form action="{{ url('insertInstallment') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-inline-flex">
                                            <input type="text" name="installment_value" class="form-control m-1" style="width: 125px" value="{{ $payment->installment_value }}">
                                            <input type="text" name="installment_month" class="form-control m-1" style="width: 125px" value="{{ date('m-Y') }}">
                                            <input type="hidden" name="customer_id" class="form-control" value="{{ $payment->customer_id }}">
                                            <input type="hidden" name="unit_id" class="form-control" value="{{ $payment->unit_id }}">
                                            <input type="hidden" name="property_id" class="form-control" value="{{ $payment->property_id }}">
                                            <input type="hidden" name="main_project_id" class="form-control" value="{{ $payment->main_project_id }}">
                                            <input type="hidden" name="construction_id" class="form-control" value="{{ $payment->construction_id }}">
                                            <input type="hidden" name="level_id" class="form-control" value="{{ $payment->level_id }}">
                                        <button type="submit" class="btn btn-warning mt-1" style="width: 100px;height:40px">دفع</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="{{ url('addUnitPayment/'.$unit->id) }}" class="btn btn-success d-inline-block" >
                                    دفعة جديدة
                                </a>
                            </td>
                        </tr>
                            @endif

                        @endif

                    @else
                    <tr>
                        <td>
                            <a href="{{ url('addUnitPayment/'.$unit->id) }}" class="btn btn-success d-inline-block" >
                                دفعة جديدة
                            </a>
                        </td>
                    </tr>
                    @endif


            </div>
        </div>
        <div class="d-inline-flex">
            <div class="col-lg-8 m-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th><h6 class="m-1 p-1 bg-danger text-lg-center" style="font-size: 20px">نظام الدفع</h6></th>
                            <th><h6 class="m-1 p-1 bg-primary text-lg-center" style="font-size: 20px">مقدم</h6></th>
                            <th><h6 class="m-1 p-1 bg-secondary text-lg-center" style="font-size: 20px">دفعة تراخيص</h6></th>
                            <th><h6 class="m-1 p-1 bg-warning text-lg-center" style="font-size: 20px">دفعة بدأ اعمال</h6></th>
                            <th><h6 class="m-1 p-1 bg-success text-lg-center" style="font-size: 20px">دفعة تسليم</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finances as $item)

                        <tr>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-danger" style="width: 10rem" href="">{{ $item->name }}</a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-primary" style="width: 10rem" href="">{{ $item->space_payment }}</a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-secondary" style="width: 10rem" href="">{{ $item->licences_payment }}</a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-warning" style="width: 10rem" href="">{{ $item->start_payment }}</a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-success" style="width: 10rem" href="">{{ $item->recieving_payment }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

  @endsection
