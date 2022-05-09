<div class="col-lg-8">
    <a href="{{url('addProperty')}}" class="btn btn-warning mb-2 myText-button">اضافة قسم جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">القسم</th>
            <th scope="col" class="text-xl-center">امر</th>
        </thead>
        <tbody>
@foreach ($property as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center"><a href="{{ url('showProperties/'.$item->id) }}">{{ $item->name }}</a></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm mr-1" href="{{ url('editProperty/'.$item->id) }}">تعديل القسم</ac>
                <a class="btn btn-danger btn-sm ml-1" href="{{ url('deleteProperty/'.$item->id) }}">حذف القسم</ac>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
