<div class="col-lg-12 col-md-6 col-sm-3">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">اسم الوحدة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">قسم</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">المنشأة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">المشروع الرئيسي</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">الادوار</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">الموقع</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">المساحة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">سعر المتر</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">سعر الوحدة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">الوصف</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">الحالة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center"> عميل</th>
            <th scope="col" class="text-xl-center" class="text-xl-center"> امر</th>
        </tr>
        </thead>
        <tbody>
@foreach ($units as $item)

        <tr>
            <th scope="row" class="text-xl-center">{{ $item->id }}</th>
            <td class="text-xl-center">{{ $item->name }}</td>
            <td class="text-xl-center">{{ $item->property->name }}</td>
            <td class="text-xl-center">{{ $item->project->name }}</td>
            <td class="text-xl-center">{{ $item->mainProject->name }}</td>
            <td class="text-xl-center">{{ $item->level_id }}</td>
            <td class="text-xl-center">{{ $item->site }}</td>
            <td class="text-xl-center">{{ $item->space }}</td>
            <td class="text-xl-center">{{ $item->price_m }}</td>
            <td class="text-xl-center">{{ $item->total_price }}</td>
            <td class="text-xl-center">{{ $item->unitDescription }}</td>
            <td class="text-xl-center">{{ $item->status }}</td>
            <td class="text-xl-center">{{ $item->customer_id }}</td>
            <td>
                <a class="btn btn-info btn-sm m-1" href="{{ url('editUnits/'.$item->id) }}">تعديل</ac>    
                <a class="btn btn-danger btn-sm m-1" href="{{ url('deleteUnits/'.$item->id) }}">حذف</ac>    
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>