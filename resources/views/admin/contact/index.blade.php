@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>الرسائل الداخلة</h1>
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
                                <th scope="col" class="text-center">البريد الاكتروني</th>
                                <th scope="col" class="text-center">رقم الهاتف</th>
                                <th scope="col" class="text-center">عنوان الرساله</th>
                                <th scope="col" class="text-center">الرسالة</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">{{$data->name}}</td>
                                    <td class="text-center">{{$data->email}}</td>
                                    <td class="text-center">{{$data->phone}}</td>
                                    <td class="text-center">{{$data->title}}</td>
                                    <td class="text-center">{{$data->message}}</td>
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
