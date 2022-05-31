<div class="col-lg-12">
    <a href="?do=addCustomer" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">اضافة عميل جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">Name</th>
            <th scope="col" class="text-xl-center">Age</th>
            <th scope="col" class="text-xl-center">Gender</th>
            <th scope="col" class="text-xl-center">Phone</th>
            <th scope="col" class="text-xl-center">Email</th>
            <th scope="col" class="text-xl-center">National id</th>
            <th scope="col" class="text-xl-center">image</th>
            <th scope="col" class="text-xl-center">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach ($customers as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->id) }}"> {{ $item->name }} </a></td>
            <td class="text-xl-center">{{ $item->age }}</td>
            {{-- <td class="text-xl-center">{{ $item->paymentKinds }}</td> --}}
            <td class="text-xl-center">{{ $item->gender }}</td>
            <td class="text-xl-center"><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
            <td class="text-xl-center">
                <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=new">
                    {{ $item->email }}
                </a>
            </td>
            <td class="text-xl-center">{{ $item->national_id }}</td>
            <td class="text-xl-center" style="padding: 0; margin: 0;line-height:0px;">
                <a href=""><img src="{{asset('assets/images/uploads/customer/'.$item->image)}}" class="w-25"  alt=" "></a>
            </td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل العميل</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>