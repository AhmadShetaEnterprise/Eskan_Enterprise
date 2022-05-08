@extends('layouts.adminPanelApp')

@section('content')
<div class="col-lg-8">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">name</th>

        </tr>
        </thead>
        <tbody>
            
@foreach ($level as $item)

        <tr>
            <th scope="row" class="text-xl-center" class="text-xl-center">
                <a href="{{ url('singleLevel/'.$item->id) }}">
                    {{ $item->name }}
                </a>
            </th>
            <th scope="row" class="text-xl-center" class="text-xl-center">
                <a href="{{ url('showLevels/'.$item->id) }}"></a>
            </th>

        </tr>
@endforeach
        </tbody>
    </table>

@endsection