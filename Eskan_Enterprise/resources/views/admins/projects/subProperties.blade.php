<div class="col-lg-8">
    <a href="?do=addCustomer" class="btn btn-warning mb-2" href="">Add New Project</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
@foreach ($subProperty as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->property_id }}</td>

        </tr>
@endforeach
        </tbody>
    </table>