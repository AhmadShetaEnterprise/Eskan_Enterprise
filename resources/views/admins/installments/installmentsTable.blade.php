<div class="col-lg-8">
    <a href="addInstallment" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">اضافة اقساط </a>
    <a href="?do=addPayment" class="btn btn-secondary mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>
    <a href="{{ url('financesIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">طرق الدفع</a>
    <a href="{{ url('paymentsIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">الدفعات</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center"> العميل </th>
            <th scope="col" class="text-xl-center"> الوحدة </th>
            <th scope="col" class="text-xl-center">نظام الدفع</th>
            <th scope="col" class="text-xl-center">سعر الوحدة</th>
            <th scope="col" class="text-xl-center">قيمة القسط </th>
            <th scope="col" class="text-xl-center"> شهر </th>
            <th scope="col" class="text-xl-center"> ما تم دفعه</th>
            <th scope="col" class="text-xl-center"> المتبقي </th>
            <th scope="col" class="text-xl-center">الاقساط المتبقية</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($installments as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->customer_id) }}"> {{ $item->customers->name }} </a></td>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->unit_id) }}"> {{ $item->unit->name }} </a></td>
            @foreach ($item->customers->finances as $finance)@endforeach
            <td class="text-xl-center"><a href="">{{ $finance->name}}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->unit->unit_price}}</a></td>
            <td class="text-xl-center bg-danger"><a class=" text-white" href="">{{ $item->installment_value }}</a></td>
            <td class="text-xl-center bg-danger"><a class=" text-white" href="">{{ $item->installment_month }}</a></td>
            @foreach ($item->customers->payments as $payment)@endforeach
            <td class="text-xl-center bg-danger"><a class=" text-white" href=""> {{ $item->unit->unit_price - $item->residual}} </a></td>
            <td class="text-xl-center bg-danger"><a class=" text-white" href="">{{ $item->residual}}</a></td>
            <td class="text-xl-center"><a href="">{{  $payment->installments - $item->count('unit_id') }}</a></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل نظام الدفع</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
