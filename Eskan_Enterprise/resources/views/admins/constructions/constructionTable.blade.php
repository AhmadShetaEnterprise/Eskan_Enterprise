<div class="col-lg-8">
    <a href="?do=addConstruction" class="btn btn-warning mb-2" href="">اضافة منشأة جديدة</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">اسم المنشأة</th>
            <th scope="col">قسم</th>
            <th scope="col">المشروع الرئيسي</th>
            <th scope="col">الادوار</th>
            <th scope="col">وحدات الدور</th>
            <th scope="col">اجمالي الوحدات</th>
            <th scope="col">التكلفة الكلية</th>
            <th scope="col">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($project as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->property->name }}</td>
            <td>{{ $item->mainProject->name }}</td>
            <td>{{ $item->levels }}</td>
            <td>{{ $item->units }}</td>
            <td>{{ $item->total_units }}</td>
            <td>{{ $item->coast }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ url('editConstruction') }}">تعديل المشروع</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>