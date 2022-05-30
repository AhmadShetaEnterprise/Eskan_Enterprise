@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <form action="{{ url('insertPaymentKind') }}" method="POST" enctype="multipart/form-data">

        <div class="card-body">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">اسم الدفعة</label>
                        <input type="text" value="" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
