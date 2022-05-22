@extends('layouts.adminPanelApp')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">{{$unitStatus->name }} </h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateUnitStatus/'.$unitStatus->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    
                    <div class="col-md-4 mb-3">
                        <label for="">العميل</label>
                        <select class="custom-select form-control  font-weight-bold text-dark" name="customer_id" >
                            <option  selected value="0">عميل</option>
                            @foreach ( $customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 ">
                        <table>
                            <thead>
                                <tr>
                                    <th><a href="">المشروع</a></th>
                                    <th><a href="">المنشأة</a></th>
                                    <th><a href="">الطابق</a></th>
                                    <th><a href="">الموقع</a></th>
                                    <th><a href="">المساحة</a></th>
                                    <th><a href="">سعر المتر</a></th>
                                    <th><a href="">سعر الوحدة</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->main_projects->name}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->constructions->name}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->level_id}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->site}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->space}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->price_m}}</a></td>
                                    <td><a class="btn btn-info" href="">{{$unitStatus->unit_price}}</a></td>
                                </tr>
                            </tbody>
                        </table>


                    <div class="">
                        <input type="hidden" class="form-control  font-weight-bold text-dark" name="status" value="تعاقد" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">حجز</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
