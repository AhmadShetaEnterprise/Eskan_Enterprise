<div class="col-lg-8">
    <a href="{{ url('addManagerFund') }}" class="mb-2 btn btn-warning text-light text-bold myText-button">حركة مالية</a>
    <a href="{{ url('managerFundIndex') }}" class="mb-2 btn btn-primary text-light text-bold myText-button">كل الحركات</a>
    <a href="{{ url('searchManagerFund/'.'0') }}" class="mb-2 btn btn-danger text-light text-bold myText-button">حركات شخصية</a>
    <a href="{{ url('searchManagerFund/'.'1') }}" class="mb-2 btn btn-success text-light text-bold myText-button">حركات المؤسسة</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th class="text-xl-center">id</th>
            <th class="text-xl-center">نوع الحركة</th>
            <th class="text-xl-center">نوع الحساب</th>
            <th class="text-xl-center">المبلغ</th>
            <th class="text-xl-center">تعليق</th>
            <th class="text-xl-center">وقت التحرير</th>
            <th class="text-xl-center">وقت التعديل</th>
            <th class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($managerFunds as $item)

        <tr>
            <th class="text-xl-center">{{ $item->id }}</th>
            <td 
                @if ($item->category == 0 && $item->kind == 0) class="text-xl-center bg-success" @elseif($item->category == 0 && $item->kind == 1) class="text-xl-center bg-danger" @else class="text-xl-center" @endif >
                {{ $item->kind == 0 ? 'استلام' : 'صرف' }}
            </td>
            <td 
                @if ($item->category == 0)
                    class="text-xl-center text-white bg-primary" @else class="text-xl-center" @endif>
                    {{ $item->category == 0 ? 'شخصي' : 'مؤسسة'  }}
            </td>
            <td 
                @if ($item->category == 0) class="text-xl-center bg-primary" @else class="text-xl-center" @endif >
                <h6 class="justify-content-center"><a class=" text-dark" href="">{{ $item->value }}</a></h6>
            </td>
            <td class="text-xl-center"><a href="">{{ $item->comment }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->created_at }}</a></td>
            <td class="text-xl-center"><a href="">{{ $item->updated_at }}</a></td>

            <td class="text-xl-center">
                <a class="btn btn-info btn-sm d-inline-block" href="{{ url('editManagerFund/'.$item->id) }}">تعديل الحركة</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
<div class="col-lg-8">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center bg-danger">مصروف شخصي</th>
            <th scope="col" class="text-xl-center bg-danger">مصروف مؤسسة</th>
            <th scope="col" class="text-xl-center bg-success">دخل شخصي</th>
            <th scope="col" class="text-xl-center bg-success">دخل مؤسسة</th>
            <th class="text-xl-center bg-danger">اجمالي مصروفات</th>
            <th class="text-xl-center bg-success">اجمالي دخل</th>
            <th class="text-xl-center bg-warning text-dark">الفرق</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-xl-center bg-primary">{{ $outgoinPersonal}}</td>
                <td class="text-xl-center">{{ $outgoinCompany}}</td>
                <td class="text-xl-center bg-primary">{{ $incomingPersonal}}</td>
                <td class="text-xl-center ">{{ $incomingCompany}}</td>
                <td class="text-xl-center bg-danger">{{ $outgoingFunds}}</td>
                <td class="text-xl-center bg-success">{{ $incomingFunds }}</td>
                <td class="text-xl-center bg-warning text-dark">{{ $incomingFunds - $outgoingFunds }}</td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
</div>