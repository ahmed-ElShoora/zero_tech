@extends('layout.customer')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة التذاكر</h1>
                        <div class="top-right-button-container">
                                    <a href="{{URL('/create-ticket')}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء تذكره</a>
                        </div>
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
                                <th scope="col" class="text-center">اسم الموقع</th>
                                <th scope="col" class="text-center">عنوان التذكره</th>
                                <th scope="col" class="text-center">اهمية التذكره</th>
                                <th scope="col" class="text-center">عرض الرسائل</th>
                                <th scope="col" class="text-center">حالة التذكره</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
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
                                    <td class="text-center"><a href="{{URL('/customer/ticket-'.$data->id)}}" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                    <td class="text-center">
                                        @switch($data->status)
                                            @case('containe')
                                                <a class="btn btn-sm btn-outline-primary" style="cursor: none">
                                                    جاري العمل عليها
                                                </a>
                                                @break
                                            @case('accept')
                                                <a class="btn btn-sm btn-outline-success" style="cursor: none">
                                                    تم الرد عليها     
                                                </a>
                                                @break  
                                            @case('close')
                                                <a class="btn btn-sm btn-outline-danger" style="cursor: none">
                                                    تم اغلاقها
                                                </a>
                                                @break                                               
                                        @endswitch
                                    </td>
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
