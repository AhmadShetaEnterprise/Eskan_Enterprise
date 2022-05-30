
   @extends('layouts.adminPanelApp')

   @section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">تعديل القسم</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateProperty/'.$properties->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم القسم</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" value="{{ $properties->name }}" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection


