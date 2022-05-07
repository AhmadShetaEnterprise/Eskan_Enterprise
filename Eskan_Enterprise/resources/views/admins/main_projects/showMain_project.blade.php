
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
                @foreach ($main_projects->units as $unit)
                <h3 class="card-title">
                    <pre>
                    {{$unit->name}}-->
                    {{$unit->customers->name}}-->
                    {{$unit->constructions->name}}-->
                    {{$unit->main_projects->name}}-->
                    {{$unit->properties->name}}-->
                    </pre>
                </</h3>
                <br>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                @endforeach
            </div>


        </div>
    </div>

@endsection

