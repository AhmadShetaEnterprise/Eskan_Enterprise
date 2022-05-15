
<form action="{{ url('addConstructions') }}" method="get">

    <div class="d-inline-flex">

            <select class="custom-select form-control m-1 font-weight-bold text-dark" name="property_id" >
                <option selected>القسم</option>
                @foreach ( $properties as $property)
                <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>


            <select class="custom-select form-control m-1 font-weight-bold text-dark" name="main_project_id" >
                <option selected>المشروع</option>
                @foreach ( $main_projects as $main_project)
                <option value="{{ $main_project->id }}">{{ $main_project->name }}</option>
                @endforeach
            </select>

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="levels" placeholder="الطوابق">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="units" placeholder="الوحدات ">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="total_units" placeholder="اجمالي الوحدات ">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="rows" placeholder="عدد الصفوف ">

            <button type="submit" class="btn btn-primary m-1" style="height: 40px">ملء البيانات</button>

    </div>
</form>
