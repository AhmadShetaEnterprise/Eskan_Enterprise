
<div class="row d-inline-flex">
    <div class="col-lg-1">
        <label for="">رقم الوحدة</label>
        <input type="text" class="form-control   text-dark" style="width: 50px" name="name[]" required>
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
        <input type="hidden" value="{{ $property->id }}" class="form-control   text-dark" style="width: 50px" name="property_id[]" required>

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
        <input type="hidden" value="{{ $main_project->id }}" class="form-control   text-dark" style="width: 50px" name="main_project_id[]" required>

        @endif

    </div>

    <div class="col-lg-2">
        <label for="">المنشأة </label>

        @if (!$construction)
        <select class="custom-select form-control   text-dark" name="construction_id" >
            <option selected>المنشأة</option>
            @foreach ( $constructions as $construction)
            <option value="{{ $construction->id }}">{{ $construction->name }}</option>
            @endforeach
        </select>
        @else

        <input type="text" value="{{ $construction->name }}" class="form-control   text-dark" style="width='40px'" name="" required>
        <input type="hidden" value="{{ $construction->id }}" class="form-control   text-dark" style="width: 50px" name="construction_id[]" required>

        @endif
    </div>

    <div class="col-lg-1">
        <label for="">رقم الطابق</label>
        <input type="text" class="form-control   text-dark" style="width: 50px" name="level_id[]" required>
    </div>

    <div class="col-lg-1">
        <label for="">الموقع</label>
        <input type="text" class="form-control   text-dark" style="width: 50px" name="site[]" required>
    </div>

    <div class="col-lg-1">
        <label for="">المساحة</label>
        <input type="text" value="{{ $space }}" class="form-control   text-dark" style="width: 70px" name="space[]" required>
    </div>

    <div class="col-lg-1">
        <label for="">سعر المتر</label>
        <input type="text" value="{{ $price_m }}" class="form-control   text-dark" style="width: 70px" name="price_m[]" required>
    </div>

    <div class="col-lg-1">
        <label for="">سعر الوحدة</label>
        <input type="text" value="{{ $unit_price }}" class="form-control   text-dark" style="width: 70px" name="unit_price[]" required>
        <input type="hidden" value="" class="form-control   text-dark" style="width: 10px" name="unitDescription[]" required>

    </div>

    <div class="col-lg-1">
        <label for="">حالة الوحدة</label>
        <select class="custom-select l   text-dark" style="width: 70px" name="status[]" >
            <option selected value="خالية">خالية</option>
            <option value="محجوزة">محجوزة</option>
            <option value="تعاقد">تعاقد</option>
            <option value="ملغاة">ملغاة</option>
        </select>
    </div>

    <div class="col-lg-1">
        <label for="">العميل</label>
        <select class="custom-select l   text-dark" style="width: 80px" name="customer_id[]" >
            <option  selected value="0">عميل</option>
            @foreach ( $customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
    </div>
</div>
