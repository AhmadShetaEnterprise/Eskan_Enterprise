@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger">
            <h1>
                {{ $customers->name }}
            </h1>
            {{-- {{ $customers->unit->name}} --}}
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-6"  style="width: 20rem;">
                @foreach ($units as $item)
                         
                <h5 class="card-title">{{ $item->customer->name }}</h5>
                <h5 class="card-title">{{ $item->name }}</h5>

                <h5 class="card-title">{{ $item->construction->name }}</h5>
                <h5 class="card-title">{{ $item->mainProject->name }}</h5>
                <h5 class="card-title">{{ $item->property->name }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                @endforeach

            </div>

        </div>
    </div>

  @endsection  