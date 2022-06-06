@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Add Customer</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insertCustomer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Age</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="age">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Gender</label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" @error('gender') is-invalid @enderror" value="male" id="gender">
                                <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" @error('gender') is-invalid @enderror" value="female" id="gender" >
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
                        <input type="text" class="form-control  font-weight-bold text-dark @error('phone') is-invalid @enderror" name="phone" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control  font-weight-bold text-dark" name="email">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">National id</label>
                        <input type="text" class="form-control font-weight-bold text-dark @error('national_id') is-invalid @enderror" name="national_id">
                        @error('national_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control  font-weight-bold text-dark">
                    </div>

                    <div class="col-md-1">
                        <input type="hidden" class="form-control" name="privilege_id" value="0">
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
