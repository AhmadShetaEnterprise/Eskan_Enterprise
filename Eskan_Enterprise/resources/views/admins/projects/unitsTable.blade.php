<div class="col-lg-8">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">اسم الوحدة</th>
            <th scope="col">قسم</th>
            <th scope="col">المشروع الرئيسي</th>
            <th scope="col">المنشأة</th>
            <th scope="col">الادوار</th>
            <th scope="col">الموقع</th>
            <th scope="col">المساحة</th>
            <th scope="col">سعر المتر</th>
            <th scope="col">سعر الوحدة</th>
            <th scope="col">الوصف</th>
            <th scope="col">الحالة</th>
            <th scope="col"> عميل</th>
        </tr>
        </thead>
        <tbody>
@foreach ($units as $item)

        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->property->name }}</td>
            <td>{{ $item->mainProject->name }}</td>
            <td>{{ $item->project->name }}</td>
            <td>{{ $item->levels }}</td>
            <td>{{ $item->site }}</td>
            <td>{{ $item->space }}</td>
            <td>{{ $item->price_m }}</td>
            <td>{{ $item->total_price }}</td>
            <td>{{ $item->unitDescription }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->customer_id }}</td>

        </tr>
@endforeach
        </tbody>
    </table>
</div>