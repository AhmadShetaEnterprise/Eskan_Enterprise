@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $units->name }}
            </h1>
            {{-- {{ $customers->unit->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">

                {{-- <h5 class="card-title">{{ $item->unit->name }}</h5> --}}
                {{-- <h5 class="card-title">{{ $item->name }}</h5> --}}

                <h5 class="card-title">{{ $units->status }}</h5>
                <h5 class="card-title">{{ $units->customers->name }}</h5>
                <h5 class="card-title">{{ $units->constructions->name }}</h5>
                <h5 class="card-title">{{ $units->main_projects->name }}</h5>
                <h5 class="card-title">{{ $units->properties->name }}</h5>
                <h5 class="card-title">{{ $units->site }}</h5>
                <h5 class="card-title">{{ $units->space }}</h5>
                <h5 class="card-title">{{ $units->price_m }}</h5>
                <h5 class="card-title">{{ $units->total_price }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>

            </div>

        </div>
    </div>

  @endsection
