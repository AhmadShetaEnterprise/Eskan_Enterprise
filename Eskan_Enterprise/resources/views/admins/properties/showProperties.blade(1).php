@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger col-lg-12">
            <h1>
                {{ $properties->name }}
            </h1>
            <img src="..." class="card-img-top" alt="...">
        </div>
        
        <h2 class="card-title">Property      :{{ $properties->name}}</h2>
        {{-- @foreach ($properties->main_projects as $main_project)
        <h2 class="card-title">Main Project  :{{ $main_project->name}}</h2>
        @endforeach --}}
        {{-- {{ dd($properties) }} --}}

        <br>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">
                الوحدات المسجلة
                <table>
                    <thead>
                        <tr>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">قسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">المشروع</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">اسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">الحالة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">العميل</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($units as $item)
                        <tr>
                            <td><a href="{{ url('show_main_project/'.$item->constructions->id) }}" class="btn btn-outline-success m-2 p-2" style="width: 125px">{{ $item->main_projects->name }}</a></td>
                            <td><a href="{{ url('showConstruction/'.$item->constructions->id) }}" class="btn btn-outline-primary m-2 p-2" style="width: 125px">{{ $item->constructions->name }}</a></td>
                            <td><a href="{{ url('unitShow/'.$item->id) }}" class="btn btn-outline-warning m-2 p-2" style="width: 125px">{{ $item->name }}</a></td>
                            <td><a href="" class="btn btn-outline-info m-2 p-2" style="width: 125px">{{ $item->status }}</a></td>
                            <td><a href="{{ url('customerShow/'.$item->customers->id) }}" class="btn btn-outline-danger m-2 p-2" style="width: 125px">{{ $item->customers->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <h5 class="card-title">{{ $item->name }}-->
                    {{ $item->status }}-->
                    {{$item->customers->name}}-->
                    {{ $item->constructions->name }}-->
                    {{ $item->main_projects->name }}
                </h5> --}}
                {{-- {{dd($units)}} --}}

                <p class="card-text">.</p>

                <a href="{{ url('searchConstruction/'.$properties->id.'/?status=خالية') }}" class="btn btn-success">وحدات خالية</a>
                <a href="{{ url('searchConstruction/'.$properties->id.'/?status=تعاقد') }}" class="btn btn-danger">وحدات تعاقد</a>
                <a href="{{ url('searchConstruction/'.$properties->id.'/?status=محجوزة') }}" class="btn btn-warning">وحدات محجوزة</a>
                <a href="{{ url('searchConstruction/'.$properties->id.'/?status=ملغاة') }}" class="btn btn-outline-danger">وحدات ملغاة</a>
                <a href="{{ url('showConstruction/'.$properties->id) }}" class="btn btn-primary">كل الوحدات</a>
                
                <p class="card-text">.</p>
            </div>
            {{-- <div>
                @for ($i = 1; $i < $levels+1; $i++)
                <div>
                    <h4>
                        <a href="{{route('showLevel', ['id'=>$i-1, 'constructions'=>$constructions->id])}}">الدور {{ $i }}</a>
                    </h4>
                </div>
                @endfor
            </div> --}}

        </div>
    </div>

@endsection
