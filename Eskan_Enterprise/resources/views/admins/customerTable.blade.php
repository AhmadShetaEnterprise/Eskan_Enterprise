<div class="col-lg-8">
    <a href="?do=addCustomer" class="btn btn-warning mb-2" href="">Add New Customer</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
@foreach ($customer as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->email }}</td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>