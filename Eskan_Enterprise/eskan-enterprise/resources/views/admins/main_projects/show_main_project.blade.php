
@extends('layouts.adminPanelApp')

@section('content')

<div class="card" style="width: ;">
    <div class="card-header text-lg-center text-danger">
        <h1>
            {{ $main_projects->name; }}
        </h1>
            {{-- {{ $customers->unit->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-12"  style="width: 20rem;">
                <br>
                <table>
                    <thead>
                        <tr>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">المنشأة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">اسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">قسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">العميل</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($main_projects->units as $unit)
                        <tr>
                            <td><a href="{{ url('showConstruction/'.$unit->constructions->id) }}" class="btn btn-outline-primary m-2">{{$unit->constructions->name}}</a></td>
                            <td><a href="{{ url('unitShow/'.$unit->id) }}" class="btn btn-primary m-2" style="width: 125px">{{$unit->name}}</a></td>
                            <td><a href="{{ url('showProperties/'.$unit->properties->id) }}" class="btn btn-outline-info m-2" style="width: 125px">{{$unit->properties->name}}</a></td>
                            <td><a href="{{ url('customerShow/'.$unit->customers->id) }}" class="btn btn-outline-danger m-2 d-inline-block" style="font-size: 1vw">{{$unit->customers->name}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <h3 class="card-title d-lg-inline-flex">

                </h3>
                <br>
            </div>


        </div>
    </div>

@endsection

