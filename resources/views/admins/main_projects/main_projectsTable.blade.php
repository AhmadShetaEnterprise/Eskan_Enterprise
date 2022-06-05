<div class="col-lg-8">
    <a href="add_main_project" class="btn btn-warning mb-2 myText-button" href="">Add New Project</a>
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
@foreach ($main_projects as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">
                <a href="{{ url('show_main_project/'.$item->id) }}">
                    {{ $item->name }}
                </a>
            </td>
            <td class="text-xl-center">{{ $item->properties->name }}</td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('edit_main_project/'.$item->id) }}">تعديل </ac>

            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
