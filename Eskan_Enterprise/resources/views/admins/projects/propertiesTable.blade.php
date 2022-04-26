<div class="col-lg-8">
    <a href="?do=addCustomer" class="btn btn-warning mb-2" href="">Add New Property</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
        </thead>
        <tbody>
@foreach ($property as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
        </tr>
@endforeach
        </tbody>
    </table>