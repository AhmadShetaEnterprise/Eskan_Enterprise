<div class="col-lg-8">
    <a href="?do=addFinance" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">اضافة نظام دفع</a>
    <a href="?do=addPayment" class="btn btn-secondary mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>
    <a href="{{ url('installmentsIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">الاقساط</a>
    <a href="{{ url('paymentsIndex') }}" class="mb-2 btn btn-secondary text-dark text-bold myText-button">الدفعات</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">نظام الدفع</th>
            <th scope="col" class="text-xl-center">دفعة ارض</th>
            <th scope="col" class="text-xl-center">دفعة تراخيص</th>
            <th scope="col" class="text-xl-center">دفعة بدأ أعمال</th>
            <th scope="col" class="text-xl-center">دفعة تسليم</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($finances as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="{{ url('financeShow/'.$item->id) }}"> {{ $item->name }} </a></td>
            <td class="text-xl-center">{{ $item->space_payment }}</td>
            <td class="text-xl-center">{{ $item->licences_payment }}</td>
            <td class="text-xl-center"><a href="">{{ $item->start_payment }}</a></td>
            <td class="text-xl-center">
                <a href="">
                    {{ $item->recieving_payment }}
                </a>
            </td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm d-inline-block" href="{{ url('editFinance/'.$item->id) }}">تعديل نظام الدفع</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>