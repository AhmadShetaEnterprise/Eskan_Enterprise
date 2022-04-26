<div class="col-lg-8">
    <a href="?do=addCustomer" class="btn btn-warning mb-2" href="">Add New Project</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">Category</th>
            <th scope="col">Levels</th>
            <th scope="col">Units</th>
            <th scope="col">Totl Units</th>
            <th scope="col">Coast</th>
        </tr>
        </thead>
        <tbody>
@foreach ($project as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->property_id }}</td>
            <td>{{ $item->levels }}</td>
            <td>{{ $item->units }}</td>
            <td>{{ $item->total_units }}</td>
            <td>{{ $item->coast }}</td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>