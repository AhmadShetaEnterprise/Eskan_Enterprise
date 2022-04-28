<div class="col-lg-8">
    <a href="?do=addProperty" class="btn btn-warning mb-2 myText-button">اضافة قسم جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">name</th>
        </thead>
        <tbody>
@foreach ($property as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
        </tr>
@endforeach
        </tbody>
    </table>