<div class="col-lg-12">
    <a href="addPaymentKind" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>


    <table class="table table-light table-bordered">
        <thead>

        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">اسم الدفعة </th>

            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($paymentKinds as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="">{{ $item->name }}</a></td>

            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل الدفعة</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
