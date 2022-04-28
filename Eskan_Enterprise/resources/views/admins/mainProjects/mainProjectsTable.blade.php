<div class="col-lg-8">
    <a href="?do=addMainProject" class="btn btn-warning mb-2 myText-button" href="">Add New Project</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">name</th>
            <th scope="col" class="text-xl-center">Category</th>
            <th scope="col" class="text-xl-center">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach ($mainProjects as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
            <td class="text-xl-center">{{ $item->property->name }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ url('editMainProject/'.$item->id) }}">تعديل </ac>    

            </td>

        </tr>
@endforeach
        </tbody>
    </table>