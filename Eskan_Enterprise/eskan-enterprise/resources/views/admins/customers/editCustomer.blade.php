@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Edit Customer</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateCustomer/'.$customers->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" value="{{ $customers->name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Age</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="age" value="{{ $customers->age }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Gender</label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" @error('gender') is-invalid @enderror" value="male" {{ $customers->gender == 'male' ? 'checked' : '' }} id="gender">
                                <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" @error('gender') is-invalid @enderror" value="female" {{ $customers->gender == 'female' ? 'checked' : '' }} id="gender" >
                            <label class="form-check-label" for="gender">Female</label>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Phone</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="phone" value="{{ $customers->phone }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control  font-weight-bold text-dark" name="email" value="{{ $customers->email }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">image</label>
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
