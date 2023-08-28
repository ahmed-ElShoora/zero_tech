@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة التذاكر</h1>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card" style="overflow: auto">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">اسم العميل</th>
                                <th scope="col" class="text-center">اسم الموقع</th>
                                <th scope="col" class="text-center">عنوان التذكره</th>
                                <th scope="col" class="text-center">اهمية التذكره</th>
                                <th scope="col" class="text-center">عرض الرسائل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">{{\App\Models\User::getName($data->customer_id)->name}}</td>
                                    <td class="text-center">{{$data->site_name}}</td>
                                    <td class="text-center">{{$data->title}}</td>
                                    <td class="text-center">
                                        @switch($data->important)
                                            @case('low')
                                                منخفضة
                                                @break
                                            @case('medium')
                                                متوسطه
                                                @break  
                                            @case('high')
                                                مرتفعه
                                                @break    
                                        @endswitch
                                    </td>
                                    <td class="text-center"><a href="{{URL('/admin/ticket-'.$data->id)}}" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>{{$datas->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
