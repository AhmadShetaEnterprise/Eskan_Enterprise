@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Add Construction</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertConstruction') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم المنشأة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="">القسم</label>
                        </div>
                        @foreach ( $properties as $property)
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="property_id" id="exampleRadios2" value="{{ $property->id }}">
                                {{ $property->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-3">

                        <div>
                            <label for="">المشروع</label>
                        </div>
                        @foreach ( $main_projects as $main_project)
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="mainProject_id" id="exampleRadios2" value="{{ $main_project->id }}">
                                {{ $main_project->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الطوابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="levels">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدات بالطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="units">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">كل الوحدات</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="total_units">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">التكلفة الكلية</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="coast">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">صورة</label>
                        <input type="file" name="image" class="form-control  font-weight-bold text-dark">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
