@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>مواقع العميل</h1>
                        <div class="top-right-button-container">
                                    <a href="{{URL('/admin/customer-create-site-'.$id)}}" class="btn btn-primary btn-lg top-right-button mr-1">اضافة موقع جديد</a>
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
                                <th scope="col" class="text-center">الاسم</th>
                                <th scope="col" class="text-center">الرابط</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">{{$data->site_name}}</td>
                                    <td class="text-center">{{$data->site_link}}</td>
                                     <td class="text-center"><a href="{{URL('/admin/customer-site-delete-'.$data->id)}}" class="btn btn-sm btn-outline-danger">حذف</a></td>
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
