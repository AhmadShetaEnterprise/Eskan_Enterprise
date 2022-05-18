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
                    {{-- <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referral</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <h4 class="text-lg-center text-light bg-info">المشاريع الرئيسية</h4>                                    
                    @foreach ($mainProjects as $mainProject)
                    <h5 class="text-lg-center text-dark border border-danger">
                        <a href="{{ url('show_main_project/'.$mainProject->id) }}">
                            {{ $mainProject->name }}
                        </a>
                    </h5>
                    <div class="row">
                        @foreach ($mainProject->constructions as $construction)      
                        <div class="col-lg-3">
                    
                            <p class="bg-primary text-lg-center">
                                <a class=" text-light" href="{{ url('showConstruction/'.$construction->id) }}">
                                    {{ $construction->name }}
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
                                    @endif
                                    >
                                    <h5>
                                        <a class="text-dark" href="{{ url('unitShow/'.$unit->id) }}">
                                        {{$unit->name}}
                                        </a>
                                    </h5>
                                    
                                </div>
                                    @endforeach
                            </div>
                    
                            
                        </div>
                        
                        @endforeach
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
