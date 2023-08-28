@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة سلايدر لمنشور</h1>
                        <div class="top-right-button-container">
                            <a href="{{URL('/admin/post-create-slide-'.$id)}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء سلايد</a>
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
                                <th scope="col" class="text-center">الصورة</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $image)
                                <tr>
                                    <td class="text-center"><img alt="detail" src="{{asset('/'.$image->image)}}" class="responsive border-0 border-radius img-fluid mb-3" style="width: 40px" /></td>
                                    <td class="text-center"><a href="{{URL('/admin/post-slide-delete-'.$image->id)}}" class="btn btn-sm btn-outline-danger">حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>{{$images->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
