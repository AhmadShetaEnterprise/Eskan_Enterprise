<div class="col-lg-12">
    <a href="{{ route('addConstruction') }}" class="btn btn-warning mb-2 btn-block responsive-width text-dark myText-button">اضافة منشأة جديدة</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">اسم المنشأة</th>
            <th scope="col" class="text-xl-center">قسم</th>
            <th scope="col" class="text-xl-center">المشروع الرئيسي</th>
            <th scope="col" class="text-xl-center">الادوار</th>
            <th scope="col" class="text-xl-center">وحدات الدور</th>
            <th scope="col" class="text-xl-center">اجمالي الوحدات</th>
            <th scope="col" class="text-xl-center">التكلفة الكلية</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($constructions as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
            <td class="text-xl-center">{{ $item->property->name }}</td>
            <td class="text-xl-center">{{ $item->main_project->name }}</td>
            <td class="text-xl-center">{{ $item->levels }}</td>
            <td class="text-xl-center">{{ $item->units }}</td>
            <td class="text-xl-center">{{ $item->total_units }}</td>
            <td class="text-xl-center">{{ $item->coast }}</td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm m-1" href="{{ url('editConstruction/'.$item->id) }}">تعديل المشروع</ac>
                <a class="btn btn-danger btn-sm m-1" href="{{ url('deleteConstruction/'.$item->id) }}">حذف المشروع</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>
