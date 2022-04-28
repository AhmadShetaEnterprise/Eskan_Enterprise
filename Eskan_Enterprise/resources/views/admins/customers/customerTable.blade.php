<div class="col-lg-8">
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
            <th scope="col" class="text-xl-center">Email</th>
        </tr>
        </thead>
        <tbody>
@foreach ($customers as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
            <td class="text-xl-center">{{ $item->age }}</td>
            <td class="text-xl-center">{{ $item->gender }}</td>
            <td class="text-xl-center">{{ $item->phone }}</td>
            <td class="text-xl-center">{{ $item->email }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ url('editCustomer/'.$item->id) }}">تعديل العميل</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>