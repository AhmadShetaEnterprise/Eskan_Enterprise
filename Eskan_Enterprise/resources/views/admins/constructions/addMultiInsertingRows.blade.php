

<div class="row d-inline-flex">


    <div class="col-md-6 mb-3">
        <label for="">اسم المنشأة</label>
        <input type="text" class="form-control  font-weight-bold text-dark" name="name[]" required>
    </div>

    <div class="col-lg-1">
        <label for="">القسم </label>

        @if (!$property) 

            <select class="custom-select form-control   text-dark" name="property_id[]" >
                <option selected>القسم</option>
                @foreach ( $properties as $property)
                <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
                
        @else
        
        <input type="text" value="{{ $property->name }}" class="form-control   text-dark" style="width='30px'" name="" required>
        <input type="hidden" value="{{ $property->id }}" class="form-control   text-dark" style="width='20px'" name="property_id[]" required>
        
        @endif

    </div>


    <div class="col-lg-1">
        <label for="">المشروع </label>

        @if (!$main_project)
            <select class="custom-select form-control   text-dark" name="property_id[]" >
                <option selected>المشروع</option>
                @foreach ( $main_projects as $main_project)
                <option value="{{ $main_project->id }}">{{ $main_project->name }}</option>
                @endforeach
            </select>
        @else
            
        <input type="text" value="{{ $main_project->name }}" class="form-control   text-dark" style="width='40px'" name="" required>
        <input type="hidden" value="{{ $main_project->id }}" class="form-control   text-dark" style="width='20px'" name="main_project_id[]" required>

        @endif

    </div>


    <div class="col-md-6 mb-3">
        <label for="">الطوابق</label>
        <input type="text" class="form-control  font-weight-bold text-dark" name="levels[]">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">الوحدات بالطابق</label>
        <input type="text" class="form-control  font-weight-bold text-dark" name="units[]">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">كل الوحدات</label>
        <input type="text" class="form-control  font-weight-bold text-dark" name="total_units[]">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">التكلفة الكلية</label>
        <input type="text" class="form-control  font-weight-bold text-dark" name="coast[]">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">صورة</label>
        <input type="file" name="image[]" class="form-control  font-weight-bold text-dark">
    </div>
    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>



</div>
