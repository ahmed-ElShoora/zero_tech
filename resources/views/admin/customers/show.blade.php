@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة تعديلات هذا المستخدم</h1>
                        <br>
                        <h1>هذه القائمة مرتبة من الاحدث للاقدم</h1>
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
                                <th scope="col" class="text-center">الاسم</th>
                                <th scope="col" class="text-center">القيمة</th>
                                <th scope="col" class="text-center">التاريخ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">
                                        @switch($data->var)
                                            @case('phone')
                                                رقم الهاتف
                                                @break
                                            @case('name')
                                                الاسم
                                                @break  
                                            @case('email')
                                                الايميل
                                                @break 
                                            @case('gender')
                                                النوع
                                                @break 
                                            @case('town')
                                                المدينة
                                                @break 
                                        @endswitch
                                    </td>
                                    <td class="text-center">{{$data->value}}</td>
                                    <td class="text-center">{{$data->created_at}}</td>
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
