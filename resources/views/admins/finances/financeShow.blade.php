@extends('layouts.adminPanelApp')

@section('content')

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger col-lg-12">
            <h1>
                {{ $finance->name }}
            </h1>


        <h2 class="card-title">
            <a href="">
            </a>
        <br>
            <table>
                <thead>
                    <tr>
                        <th><h3 class="m-2 p-2 bg-dark text-lg-center">اسم نظام الدفع</h3></th>
                        <th><h3 class="m-2 p-2 bg-dark text-lg-center">مقدم الارض</h3></th>
                        <th><h3 class="m-2 p-2 bg-dark text-lg-center"> دفعة التراخيص</h3></th>
                        <th><h3 class="m-2 p-2 bg-dark text-lg-center">دفعة بدأ الاعمال</h3></th>
                        <th><h3 class="m-2 p-2 bg-dark text-lg-center">دفعة التسليم</h3></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$finance->name}}</a></td>
                        <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$finance->space_payment}} %</a></td>
                        <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$finance->licences_payment}} %</a></td>
                        <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$finance->start_payment}} %</a></td>
                        <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px">{{$finance->recieving_payment}} %</a></td>
                    </tr>


                </tbody>
            </table>




        </div>
    </div>

@endsection
