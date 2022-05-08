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
                الوحدات المسجلة

                @if (!$units == null)

                @foreach ($units as $item)
                <h5 class="card-title">{{ $item->name}}-->{{ $item->status }}-->{{$item->customers->name}}</h5>
                @endforeach

                @elseif($units == null)
                <h5 class="card-title">no</h5>
                @else
                <h5 class="card-title">{{ $item->name}}-->{{ $item->status }}-->{{$item->customers->name}}</h5>
                @endif


                <p class="card-text">.</p>
                <a href="{{ url('showConstruction/'.$constructions->id.'/?status=خالية') }}" class="btn btn-primary">منشئات خالية</a>
                <a href="{{ url('showConstruction/'.$constructions->id.'/?status=تعاقد') }}" class="btn btn-primary">منشئات تعاقد</a>
                <a href="{{ url('showConstruction/'.$constructions->id.'/?status=محجوزة') }}" class="btn btn-primary">منشئات محجوزة</a>
                <a href="{{ url('showConstruction/'.$constructions->id.'/?status=ملغاة') }}" class="btn btn-primary">منشئات ملغاة</a>

            </div>

        </div>
    </div>

  @endsection
