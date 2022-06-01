<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eskan Elmansoura</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- select css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>

<body>

    @include('layouts.includes.adminSidebar')

    @include('layouts.includes.adminHeader')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                @yield('content')
                
            </div>
        </div>
    </div>


    <!-- jquery vendor -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/js/dashboard2.js') }}"></script>
    
    <!-- scripit search select selectpicker start-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}
    
    <!-- scripit search select selectpicker end-->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            // alert('hi');
        })
    </script>
            {{-- <script>
                $(document).ready(function () {
                    alert('hi');
    
                    //----- Open model CREATE -----//
    
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
                }) --}}
    
            </script>
    
</body>

</html>