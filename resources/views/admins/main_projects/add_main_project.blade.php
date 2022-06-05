@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Add MainProject</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insert_main_project') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم المشروع</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">قسم</label>
                        <select  name="property_id" id="" class="custom-select form-control  font-weight-bold text-dark" required>
                            <option value="">القسم</option>
                            @foreach ($properties as $property)                               
                            <option value="{{ $property->id }}">{{ $property->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
