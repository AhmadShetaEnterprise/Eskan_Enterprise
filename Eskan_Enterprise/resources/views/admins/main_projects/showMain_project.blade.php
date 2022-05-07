
@extends('layouts.adminPanelApp')

@section('content')

@foreach ($customers->main_projects as $main_project)
    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $customers->name; }}
            </h1>
            {{-- {{ $customers->unit->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            @foreach ($customers->units as $unit)
            <div class="card-body col-lg-12"  style="width: 20rem;">
                <br>
                <h3 class="card-title">
                    <pre>
                    {{$unit->name}}-->
                    {{$unit->constructions->name}}-->
                    {{$unit->main_projects->name}}-->
                    {{$unit->properties->name}}-->
                    </pre>
                </</h3>
                <br>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            @endforeach


        </div>
    </div>

    @endforeach
@endsection

