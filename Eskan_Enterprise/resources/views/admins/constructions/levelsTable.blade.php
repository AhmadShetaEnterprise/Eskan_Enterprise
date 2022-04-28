<div class="col-lg-8">
    <a href="?do=addLevel" class="btn btn-warning mb-2 myText-button" href="">اضافة طابق جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center" >id</th>
            <th scope="col" class="text-xl-center">name</th>

        </tr>
        </thead>
        <tbody>
@foreach ($levels as $item)

        <tr>
            <th scope="row" class="text-xl-center" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="{{ url('editLevel/'.$item->id) }}">تعديل </ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>