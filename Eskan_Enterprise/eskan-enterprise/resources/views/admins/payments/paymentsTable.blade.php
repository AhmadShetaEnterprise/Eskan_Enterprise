<div class="col-lg-12">
    <a href="addPayment" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>
    <a href="{{ url('financesIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">طرق الدفع</a>
    <a href="{{ url('installmentsIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">الاقساط</a>

    <table class="table table-light table-bordered">
        <thead>

        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">قيمة الوحدة</th>
            <th scope="col" class="text-xl-center"> العميل </th>
            <th scope="col" class="text-xl-center"> الوحدة </th>
            <th scope="col" class="text-xl-center">نظام الدفع</th>
            <th scope="col" class="text-xl-center">دفعة </th>
            <th scope="col" class="text-xl-center"> ما تم دفعه</th>
            <th scope="col" class="text-xl-center"> المتبقى </th>
            <th scope="col" class="text-xl-center"> خصم النقدي </th>
            <th scope="col" class="text-xl-center"> قيمة النقدي </th>
            <th scope="col" class="text-xl-center">عدد الاقساط</th>
            <th scope="col" class="text-xl-center">قيمة القسط </th>
            {{-- <th scope="col" class="text-xl-center"> الحالة </th>
            <th scope="col" class="text-xl-center"> الحالة </th>
            <th scope="col" class="text-xl-center"> الحالة </th>
            <th scope="col" class="text-xl-center"> الحالة </th> --}}
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($payments as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="">{{ $item->unit_price }}</a></td>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->customer_id) }}"> {{ $item->customer->name }} </a></td>
            <td class="text-xl-center"><a href="{{ url('unitShow/'.$item->unit_id) }}"> {{ $item->unit->name }} </a></td>
        @if (is_null($item->finance) || empty($item->finance))
            <td class="text-xl-center"><a href=""> {{$item->finance_id}} </a></td>
        @else
            <td class="text-xl-center"><a href=""> {{ $item->finance->name}} </a></td>
        @endif
            <td class="text-xl-center">{{ $item->paymentKind->name }}</td>
            <td class="text-xl-center"><a href="">{{ $item->unit_price - $item->residual }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->residual }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->discount }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->cash_discount }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->installments }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->installment_value }}</a></td>
            {{-- <td class="text-xl-center"><a href=""> {{ $item->property_id }} </a></td>
            <td class="text-xl-center"><a href="">{{ $item->main_project_id }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->construction_id }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->level_id }}</a></td> --}}
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل الدفعة</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
