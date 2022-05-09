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
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center"> العميل</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الموقع</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">المساحة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">سعر المتر</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">سعر الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الدور</h3></th>
                        </tr>
                    </thead>
                    <tbody>
@foreach ($units as $item)
                
                        <tr>
                            <td><a href="{{ url('unitShow/'.$item->id) }}" class="btn btn-primary m-2" style="width: 125px">{{$item->name}}</a></td>
                            <td>
                                <a href="#"
                                    @if ($item->status == 'خالية') class="btn btn-success m-2"
                                    @elseif ($item->status == 'تعاقد') class="btn btn-danger m-2"
                                    @elseif ($item->status == 'محجوزة') class="btn btn-warning m-2"
                                    @else class="btn btn-outline-danger m-2"
                                    @endif
                                    class="btn btn-outline-info m-2" style="width: 125px">{{$item->status}}
                                </a>
                            </td>
                            <td><a href="{{ url('customerShow/'.$item->customers->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">{{$item->customers->name}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->site}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->space}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->price_m}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->total_price}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$item->levels->name}}</a></td>
                        </tr>
@endforeach
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
