@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $constructions->name }}
            </h1>
            <img src="..." class="card-img-top" alt="...">
        </div>

        <h2 class="card-title">Property      :{{ $constructions->properties->name}}</h2>
        <h2 class="card-title">Main Project  :{{ $constructions->main_projects->name}}</h2>
        <br>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">
                <table>
                    <thead>
                        <tr>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">اسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الحالة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">
                                {{-- {{ $units->constructions->status }} --}}
                                @if ($units->isEmpty())
                                العميل
                                @else
                                    @foreach ($units as $item)

                                    @endforeach

                                    @if ($item->status == 'خالية') حجز

                                    @elseif ($item->status == 'تعاقد') العميل

                                    @elseif ($item->status == 'محجوزة') العميل

                                    @elseif ($item->status == 'محجوزة') العميل

                                    @else حجز

                                    @endif


                                @endif

                                </h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الموقع</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">المساحة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">سعر المتر</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">سعر الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الدور</h3></th>
                        </tr>
                    </thead>
                    <tbody>
@foreach ($units as $item)

                        @if ($item->count() > 0)

                        <tr>
                            <td><a href="{{ url('unitShow/'.$item->id) }}" class="btn btn-primary m-2" style="width: 125px">{{$item->name}}</a></td>
                            <td>
                                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status='.$item->status) }}"
                                    @if ($item->status == 'خالية') class="btn btn-success m-2"
                                    @elseif ($item->status == 'تعاقد') class="btn btn-danger m-2"
                                    @elseif ($item->status == 'محجوزة') class="btn btn-warning m-2"
                                    @else class="btn btn-outline-danger m-2"
                                    @endif
                                    class="btn btn-outline-info m-2" style="width: 125px">{{$item->status}}
                                </a>
                            </td>
                            @if ($item->status == 'خالية')
                            <td><a href="{{ url('editUnitStatus/'.$item->id) }}" class="btn btn-outline-success m-2" style="width: 125px">حجز</a></td>
                            @elseif ($item->status == 'تعاقد')
                            <td><a href="{{ url('customerShow/'.$item->customers->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">{{$item->customers->name}}</a></td>
                            @elseif ($item->status == 'محجوزة')
                            <td><a href="{{ url('customerShow/'.$item->customers->id) }}" class="btn btn-outline-warning m-2" style="width: 125px">{{$item->customers->name}}</a></td>
                            @elseif ($item->status == 'ملغاة')
                            <td><a href="{{ url('editUnitStatus/'.$item->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">حجز</a></td>
                            @else
                            <td>no</td>
                            @endif

                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->site}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->space}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->price_m}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->unit_price}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->levels->name}}</a></td>
                        </tr>
                        @else
                        <tr>
                            <td>no</td>
                        </tr>

                        @endif

@endforeach
{{-- <form action="{{ url('updateStatusUnit/'.$item->id) }}" method="POST" enctype="multipart/form-data">
    <div class="d-inline-flex">
        @csrf
        @method('PUT')
        <div>
            <select class="custom-select form-control  font-weight-bold text-dark" name="customer_id" >
                <option  selected value="0">عميل</option>
                @foreach ( $customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
            <div>
                <input type="hidden" value="محجوزة" name="status">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <button type="submit" class="btn btn-primary">اضافة</button>
        </div>
    </div>
</form> --}}
                    </tbody>
                </table>


                <p class="card-text">.</p>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=خالية') }}" class="btn btn-success">وحدات خالية</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=تعاقد') }}" class="btn btn-danger">وحدات تعاقد</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=محجوزة') }}" class="btn btn-warning">وحدات محجوزة</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=ملغاة') }}" class="btn btn-outline-danger">وحدات ملغاة</a>
                <a href="{{ url('showConstruction/'.$constructions->id) }}" class="btn btn-primary">كل الوحدات</a>

            </div>

        </div>
    </div>

@endsection
