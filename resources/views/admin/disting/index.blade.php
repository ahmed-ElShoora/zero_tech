@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة مايميزنا</h1>
                        <div class="top-right-button-container">
                                    <a href="{{URL('/admin/disting-create')}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء ميزة</a>
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
                                <th scope="col" class="text-center">تعديل</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($distins as $distin)
                                <tr>
                                    <td class="text-center">{{$distin->title_ar}}</td>
                                    <td class="text-center"><a href="{{URL('/admin/disting-edite-'.$distin->id)}}" class="btn btn-sm btn-outline-primary">تعديل</a></td>
                                    <td class="text-center"><a href="{{URL('/admin/disting-delete-'.$distin->id)}}" class="btn btn-sm btn-outline-danger">حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>{{$distins->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
