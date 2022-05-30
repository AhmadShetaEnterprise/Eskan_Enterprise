@extends('layouts.adminPanelApp')

@section('content')
<div class="col-lg-8">
    <a href="?do=addLevel" class="btn btn-warning mb-2 myText-button" href="">اضافة طابق جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">{{ $level->name }}</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row" class="text-xl-center" class="text-xl-center">
                @foreach ($level->units as $item)
                <a href="">
                    {{ $item->name }}
                </a>
                @endforeach
            </th>
            <th scope="row" class="text-xl-center" class="text-xl-center">
                <a href="{{ url('showLevels/'.$item->id) }}"></a>
            </th>

        </tr>
        </tbody>
    </table>

@endsection