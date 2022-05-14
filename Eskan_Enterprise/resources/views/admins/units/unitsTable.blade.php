
<div class="col-lg-12 col-md-6 col-sm-3">
    <a href="{{ route('addUnit') }}" class="btn btn-warning mb-2 myText-button">اضافة وحدة جديدة</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">اسم الوحدة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">قسم</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">المنشأة</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">المشروع الرئيسي</th>
            <th scope="col" class="text-xl-center" class="text-xl-center">الدور</th>
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
            <td class="text-xl-center">
                <a href="{{ url('unitShow/'.$item->id) }}">
                    {{ $item->name }}
                </a>
            </td>
            <td class="text-xl-center"><a href="{{ url('showProperties/'.$item->property_id) }}">{{ $item->properties->name }}</a></td>
            <td class="text-xl-center">
            <a href="{{ url('showConstruction/'.$item->constructions->id) }}">
                    {{ $item->constructions->name }}
            </a>
            </td>
            <td class="text-xl-center"><a href="{{ url('show_main_project/'.$item->main_project_id) }}">{{ $item->main_projects->name }}</a></td>
            <td class="text-xl-center"><a href="{{route('showLevel', ['id'=>$item->level_id-1, 'constructions'=>$item->constructions->id])}}">{{ $item->levels->name }}</a></td>
            <td class="text-xl-center">{{ $item->site }}</td>
            <td class="text-xl-center">{{ $item->space }}</td>
            <td class="text-xl-center">{{ $item->price_m }}</td>
            <td class="text-xl-center">{{ $item->unit_price }}</td>
            <td class="text-xl-center">{{ $item->unitDescription }}</td>
            <td class="text-xl-center"><a href="{{ url('searchConstruction/'.$item->constructions->id.'/?status='.$item->status) }}">{{ $item->status ? $item->status : 'خالية' }}</a></td>
            <td class="text-xl-center"><a href="{{ url('customerShow/'.$item->customers->id) }}" class=" m-2" style="width: 125px">@if ($item->customer_id) {{ $item->customers->name }} @else   @endif</a></td>

            <td>
                <a class="btn btn-info btn-sm m-1" href="{{ url('editUnit/'.$item->id) }}">تعديل</ac>
                <a class="btn btn-danger btn-sm m-1" href="{{ url('deleteUnit/'.$item->id) }}">حذف</ac>
            </td>

        </tr>
@endforeach
        </tbody>
    </table>
    {{-- <div>
        @for ($i = 1; $i < $levels+1; $i++)
        <div>
            <h4>
                <a href="{{route('showLevel', ['id'=>$i-1, 'constructions'=>$constructions->id])}}">الدور {{ $i }}</a>
            </h4>
        </div>
        @endfor
    </div> --}}
</div>
