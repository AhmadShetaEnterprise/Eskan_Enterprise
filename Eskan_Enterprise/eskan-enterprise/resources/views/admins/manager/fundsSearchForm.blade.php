<form method="GET" action="{{ url('searchByAll/') }}" class="d-inline-flex" enctype="multipart/form-data">
    @csrf
    <div class="input-group date" id="datepicker">
        <label for="">From date</label>
        <input  type="date" class="form-control m-1" id="date" type="date" name="day_from">

        <label for="">To date</label>
        <input  type="date" class="form-control m-1" id="date" type="date" name="day_to">

        <label for="">Single Day</label>
        <input  type="date" class="form-control m-1" id="date" type="date" name="one_day">

        <label for="">فئة</label>
        <select  name="category" id="" class="custom-select form-control  font-weight-bold text-dark" >
            <option value="">فئة</option>
            <option value="0">شخصية</option>
            <option value="1">مؤسسة</option>
        </select>

        <label for="">نوع</label>
        <select  name="kind" id="" class="custom-select form-control  font-weight-bold text-dark" >
            <option value="">نوع</option>
            <option value="0">وارد</option>
            <option value="1">منصرف</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary m-1">Search</button>
</form>