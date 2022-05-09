@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger col-lg-12">
            <h1>
                {{ $constructions->name }}
            </h1>
            <img src="..." class="card-img-top" alt="...">
        </div>

        <h2 class="card-title">Property      :{{ $constructions->properties->name}}</h2>
        <h2 class="card-title">Main Project  :{{ $constructions->main_projects->name}}</h2>
        <h2 class="card-title">
            <a href="">
                Levels  :{{$levels =  $constructions->levels}} </h2>
            </a>
        <br>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">

                <p class="card-text">.</p>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=خالية') }}" class="btn btn-primary">وحدات خالية</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=تعاقد') }}" class="btn btn-primary">وحدات تعاقد</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=محجوزة') }}" class="btn btn-primary">وحدات محجوزة</a>
                <a href="{{ url('searchConstruction/'.$constructions->id.'/?status=ملغاة') }}" class="btn btn-primary">وحدات ملغاة</a>
                <a href="{{ url('showConstruction/'.$constructions->id) }}" class="btn btn-danger">كل الوحدات</a>

            </div>
            <div>
                @for ($i = 1; $i < $levels+1; $i++)
                <div>
                    <h4>
                        {{-- <a href="{{ url('showLevel/'.$i-1) }}">الدور {{ $i }}</a>  --}}
                        <a href="{{route('showLevel', ['id'=>$i-1, 'constructions'=>$constructions->id])}}">الدور {{ $i }}</a>
                        {{-- <a href="{{ route('showLevel', ['id' => 5, 'constructions' => $constructions->id]) }}">الدور {{ $i }}</a>  --}}
                    </h4>
                </div>
                @endfor
            </div>

        </div>
    </div>

@endsection
