@extends('layouts.adminPanelApp')

@section('content')

<body>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <h4 class="text-lg-center text-light bg-info">المشاريع الرئيسية</h4>
                    @foreach ($mainProjects as $mainProject)
                    {{dd($mainProjects)}}
                    <h5 class="text-lg-center text-dark border border-danger">
                        <a href="{{ url('show_main_project/'.$mainProject->id) }}">
                            {{ $mainProject->name }}
                        </a>
                    </h5>
                    <div class="row">
                        @if ($mainProject->constructions->isNotEmpty() || !is_null($mainProject->constructions))

                        @foreach ($mainProject->constructions as $construction)
                        <div class="col-lg-3">

                            <p class="bg-primary text-lg-center">
                                <a class=" text-light" href="{{ url('showConstruction/'.$construction->id) }}">
                                    {{$construction->name}}
                                </a>
                            </p>
                            <div class="row">
                                @foreach ($construction->units as $unit)

                                <div @if ($unit->status == "تعاقد")
                                    class="col-3 bg-danger text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    @elseif($unit->status == "خالية")
                                    class="col-3 bg-success text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    @elseif($unit->status == "محجوزة")
                                    class="col-3 bg-warning text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    @else
                                    class="col-3 text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    @endif
                                    >
                                    <h5 class="">
                                        <a class="text-dark p-2" href="{{ url('unitShow/'.$unit->id) }}">
                                        {{$unit->name}}
                                        </a>
                                    </h5>

                                </div>
                                    @endforeach
                            </div>


                        </div>

                        @endforeach
                        @else

                        @endif
                    </div>
                    @endforeach
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->











                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @endsection
