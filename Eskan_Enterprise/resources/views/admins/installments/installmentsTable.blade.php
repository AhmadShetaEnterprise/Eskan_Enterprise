<div class="col-lg-8">
    <a href="?do=addInstallment" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">اضافة اقساط </a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center"> العميل </th>
            <th scope="col" class="text-xl-center"> الوحدة </th>
            <th scope="col" class="text-xl-center">نظام الدفع</th>
            <th scope="col" class="text-xl-center">دفعة ارض</th>
            <th scope="col" class="text-xl-center">دفعة تراخيص</th>
            <th scope="col" class="text-xl-center">دفعة بدأ أعمال</th>
            <th scope="col" class="text-xl-center">دفعة تسليم</th>
            <th scope="col" class="text-xl-center">سعر الوحدة</th>
            <th scope="col" class="text-xl-center"> ما تم دفعه</th>
            <th scope="col" class="text-xl-center">عدد الاقساط</th>
            <th scope="col" class="text-xl-center">قيمة القسط </th>
            <th scope="col" class="text-xl-center"> الحالة </th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($installments as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->unit_id) }}"> {{ $item->customer_id }} </a></td>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->customer_id) }}"> {{ $item->unit_id }} </a></td>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->id) }}"> {{ $item->name }} </a></td>
            <td class="text-xl-center">{{ $item->space_payment }}</td>
            <td class="text-xl-center">{{ $item->licences_payment }}</td>
            <td class="text-xl-center"><a href="">{{ $item->start_payment }}</a></td>
            <td class="text-xl-center">
                <a href="">{{ $item->recieving_payment }}</a>
            </td>
            <td class="text-xl-center"><a href="">{{ $item->unit_price }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->residual }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->installments }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->installment_value }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->installments_month }}</a></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل نظام الدفع</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
