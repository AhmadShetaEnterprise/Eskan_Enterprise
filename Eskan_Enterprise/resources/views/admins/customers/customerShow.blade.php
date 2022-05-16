@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $customer->name }}
            </h1>
            {{-- {{ $customers->item->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">
                <table>
                    <thead>
                        <tr>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">الوحدة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">الحالة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المنشأة  </h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">النشروع الرئيسي </h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">الموقع</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المساحة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر المتر</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر الوحدة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">الدور</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($units as $item)
                            <td><a href="{{ url('unitShow/'.$item->id) }}" class="btn btn-primary m-2" style="width: 125px">{{$item->name}}</a></td>
                            <td>
                                <a href="{{ url('searchConstruction/'.$item->constructions->id.'/?status='.$item->status) }}"
                                    @if ($item->status == 'خالية') class="btn btn-success m-2"
                                    @elseif ($item->status == 'تعاقد') class="btn btn-danger m-2"
                                    @elseif ($item->status == 'محجوزة') class="btn btn-warning m-2"
                                    @else class="btn btn-outline-danger m-2"
                                    @endif
                                    class="btn btn-outline-info m-2" style="width: 125px">{{$item->status}}
                                </a>
                            </td>
                            <td><a href="{{ url('show_main_project/'.$item->constructions->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$item->constructions->name}}</a></td>
                            <td><a href="{{ url('show_main_project/'.$item->main_projects->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$item->main_projects->name}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->site}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->space}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->price_m}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->unit_price}}</a></td>
                            <td><a href="{{ route('showLevel', ['id'=>$item->level_id-1, 'constructions'=>$item->constructions->id]) }}" class="btn btn-outline-info m-2" style="width: 125px">{{$item->levels->name}}</a></td>
                        </tr>
                        
                    </tbody>
                </table>
                <h3>المدفوعات</h3>
                <table>
                    <thead>
                        <tr>
                            <th class="m-2 p-2 bg-dark text-lg-center">الوحدة</th>
                            <th class="m-2 p-2 bg-dark text-lg-center"> قيمة الوحدة</th>
                            <th class="m-2 p-2 bg-dark text-lg-center">المدفوع</th>
                            <th class="m-2 p-2 bg-dark text-lg-center">المتبقي</th>
                            <th class="m-2 p-2 bg-dark text-lg-center">نظام الدفع</th>
                        </tr>
                    </thead>
                    <tbody>
                        @endforeach
                        @foreach ($payments as $payment)
                            
                        @endforeach
                        <tr>
                            <td><a href="#" class="btn btn-primary m-2" style="width: 125px">{{$payment->unit->name}}</a> </td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$payment->unit->unit_price}}</a> </td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{ $paymentsDone =  $payment->unit_price - $payment->residual}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$payment->residual}}</a> </td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$payment->finance->name}}</a></td>
                        </tr>

                        {{-- {{ $count =  $payment->installments }} --}}
                        {{-- {{ $date =  '01/05' }} --}}

                        @for ($i = 0; $i < $count=  $payment->installments; $i++)
                        
                        <tr>
                            <td>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="d-inline-flex">
                                            <input type="text" name="installment_value" class="form-control m-1" style="width: 125px" value="{{ $payment->installment_value }}">
                                            <input type="text" name="installment_month" class="form-control m-1" style="width: 125px" value="{{ $date++ }}">
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->customer_id }}">
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->unit_id }}">                                   
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->property_id }}">
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->main_project_id }}">
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->construction_id }}">
                                            <input type="hidden" name="installment_month" class="form-control" value="{{ $payment->level_id }}">
                                        <button type="submit" class="btn btn-success mt-1" style="width: 40px;height:40px">دفع</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </div>

  @endsection
