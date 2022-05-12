@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1 class=" bg-primary">
                {{$unit->name}}
            </h1>
            {{-- {{ $customers->unit->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">
                <td>
                    <a href="{{ url('searchConstruction/'.$unit->constructions->id.'/?status='.$unit->status) }}"
                        @if ($unit->status == 'خالية') class="btn btn-success m-2"
                        @elseif ($unit->status == 'تعاقد') class="btn btn-danger m-2"
                        @elseif ($unit->status == 'محجوزة') class="btn btn-warning m-2"
                        @else class="btn btn-outline-danger m-2"
                        @endif
                        class="btn btn-outline-info m-2" style="width: 125px">{{$unit->status}}
                    </a>
                </td>
                <td>
                    {{-- @if ()
                        
                    @endif --}}
                    <a href="{{ url('editStatusUnit/'.$unit->id) }}" class="btn btn-outline-success m-2" style="width: 125px">
                        دفعة جديدة
                    </a>
                </td>

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
                                    <a href="{{ url('editStatusUnit/'.$unit->id) }}" class="btn btn-outline-success m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                                @elseif ($unit->status == 'تعاقد')
                                <td>
                                    <a href="{{ url('customerShow/'.$unit->customers->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">
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
                                    <a href="{{ url('editStatusUnit/'.$unit->id) }}" class="btn btn-outline-danger m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                            @endif
                            <td><a href="{{ url('show_main_project/'.$unit->main_projects->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$unit->main_projects->name}}</a></td>
                            <td><a href="{{ url('show_main_project/'.$unit->constructions->id) }}" class="btn btn-outline-success m-2" style="width: 125px">{{$unit->constructions->name}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->site}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->space}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->price_m}}</a></td>
                            <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->unit_coast}}</a></td>
                            <td><a href="{{ route('showLevel', ['id'=>$unit->level_id-1, 'constructions'=>$unit->constructions->id]) }}" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->levels->name}}</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

  @endsection
