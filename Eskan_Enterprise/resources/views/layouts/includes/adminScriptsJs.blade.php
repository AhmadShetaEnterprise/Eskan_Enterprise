        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/jquery-3.5.1.slim.min.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/jquery-3.6.0.min.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            $(document).ready(function () {
                alert('hi');
            })
            jQuery(document).ready(function($){
    //----- Open model CREATE -----//
                alert('hi');

                jQuery('#btn-add').click(function () {
                    jQuery('#btn-save').val("add");
                    jQuery('#myForm').trigger("reset");
                    jQuery('#formModal').modal('show');
            });

            $('thead').on('click', '.addRow', function () {
                var trForm =
                '@csrf<div class="row d-inline-flex"><div class="col-lg-1"><label for="">رقم الوحدة</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="name[]" required></div>'+

                '<div class="col-lg-1"><div><label for="">القسم</label></div><select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="property_id[]" ><option selected>القسم</option>@foreach ( $properties as $property)<option value="{{ $property->id }}">{{ $property->name }}</option>@endforeach</select></div>'+

                '<div class="col-lg-1"><label for="">المشروع</label><select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="main_project_id[]" ><option selected>المشروع</option> @foreach ( $main_projects as $main_project)<option value="{{ $main_project->id }}">{{ $main_project->name }}</option>@endforeach</select></div>'+

                '<div class="col-lg-1"><label for="">المنشأة</label><select class="custom-select l  font-weight-bold text-dark" style="width='20px'" name="construction_id[]" ><option selected>المنشأة</option>@foreach ( $constructions as $construction)<option value="{{ $construction->id }}">{{ $construction->name }}</option>@endforeach</select></div>'+


                '<div class="col-lg-1"><label for="">رقم الطابق</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="level_id[]" required></div>'+

                '<div class="col-lg-1"><label for="">الموقع</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="site[]" required></div>'+

                '<div class="col-lg-1"><label for="">المساحة</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="space[]" required></div>'+

                '<div class="col-lg-1"><label for="">سعر المتر</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="price_m[]" required></div>'+

                '<div class="col-lg-1"><label for="">سعر الوحدة</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="unit_price[]" required></div>'+

                '<div class="col-lg-1"><label for="">الوصف</label><input type="text" class="form-control  font-weight-bold text-dark" style="width='20px'" name="unitDescription[]" required></div>'+

                '<div class="col-lg-1"><label for="">حالة الوحدة</label><select class="custom-select  font-weight-bold text-dark" style="width='20px'" name="status[]" ><option selected value="خالية">خالية</option><option value="محجوزة">محجوزة</option><option value="تعاقد">تعاقد</option><option value="ملغاة">ملغاة</option></select></div>'+

                '<div class="col-lg-1"><label for="">العميل</label><select class="custom-select  font-weight-bold text-dark" style="width='20px'" name="customer_id[]" ><option  selected value="0">عميل</option>@foreach ( $customers as $customer)<option value="{{ $customer->id }}">{{ $customer->name }}</option>@endforeach</select></div>'+

                '<div class="col-md-12 mb-3"><button type="submit" class="btn btn-primary">اضافة</button></div>'+
                '<div class="col-lg-1 deleteRow"><a href="javascript:;" class="btn btn-danger">+</a></div>'+
                '</div>' ;

                $('tbody').append(trForm)

            });
            
            $('tbody').on('click', 'deleteRow', function (){
                     $(this).parent().parent().remove();
                    });
        </script>
