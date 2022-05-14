@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $customers->name }}
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
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

  @endsection
