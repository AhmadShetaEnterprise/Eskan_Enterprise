
   @extends('layouts.adminPanelApp')

   @section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">اضافة وحدة</h1>
        </div>
        <div class="card-body">
            <thead  class="thead">
                <div class="col-lg-12 addRow"><a class="btn btn-primary" href="javascript:;">+</a></div>
            </thead>
            <tbody class="tbody">
                <form action="{{ url('unitMultipleStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (!$rows) {{$rows=1}}

                    @endif
                    @for ($i = 0; $i < $rows; $i++)
                    @include('admins.units.insertingUnitsRow') {{ $i }}
                    @endfor
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضافة</button>
                    </div>
                </form>
            </tbody>
        </div>
    </div>

    @endsection
