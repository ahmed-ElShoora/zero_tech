@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة العملاء</h1>
                        <div class="top-right-button-container">
                                    <a href="{{URL('/admin/customer-create')}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء عميل جديده</a>
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
                                <th scope="col" class="text-center">رقم الهاتف</th>
                                <th scope="col" class="text-center">الايميل</th>
                                <th scope="col" class="text-center">الرقم السري</th>
                                <th scope="col" class="text-center">الجنس</th>
                                <th scope="col" class="text-center">المدينة</th>
                                <th scope="col" class="text-center">عرض مواقع العميل</th>
                                <th scope="col" class="text-center">عرض التعديلات</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->phone}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->password_hash}}</td>
                                    <td class="text-center">{{$user->gender}}</td>
                                    <td class="text-center">{{$user->town}}</td>
                                    <td class="text-center"><a href="{{URL('/admin/customer-sites-'.$user->id)}}" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                    <td class="text-center"><a href="{{URL('/admin/customer-show-'.$user->id)}}" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                    <td class="text-center"><a href="{{URL('/admin/customer-delete-'.$user->id)}}" class="btn btn-sm btn-outline-danger">حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>{{$users->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
