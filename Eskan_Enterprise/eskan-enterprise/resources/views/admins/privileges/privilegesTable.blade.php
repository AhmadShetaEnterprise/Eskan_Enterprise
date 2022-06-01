<div class="col-lg-8">
    <a href="{{ url('addPrivilege/?do=addPrivilege') }}" class="btn btn-warning mb-2 myText-button">اضافة صلاحية</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">الصلاحية</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($privileges as $item)
            <tr>
                <th scope="row" class="text-xl-center">{{ $item->id }}</th>
                <td class="text-xl-center">
                    <a href="{{ url('showProperties/'.$item->id) }}">{{ $item->name }}</a>
                </td>
                <td class="text-xl-center">{{ $item->code }}</td>
                <td class="text-xl-center">
                    <a class="btn btn-info btn-sm mr-1" href="{{ url('editPrivilege/'.$item->id) }}">تعديل الصلاحية</ac>
                    <a class="btn btn-danger btn-sm ml-1" href="{{ url('deletePrivilege/'.$item->id) }}">حذف الصلاحية</ac>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</div>