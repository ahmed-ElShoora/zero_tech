@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة الصور للصفحات</h1>
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
                                <th scope="col" class="text-center">اسم الصفحة</th>
                                <th scope="col" class="text-center">الصورة</th>
                                <th scope="col" class="text-center">تعديل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($photos as $photo)
                                <tr>
                                    <td class="text-center">
                                        @switch($photo->var)
                                            @case('about')
                                            من نحن
                                                @break
                                            @case('level')
                                            مراحل المشروع
                                                @break
                                            @case('blog')
                                            المدونه
                                                @break
                                            @case('contact')
                                            اتصل بنا
                                                @break
                                            @case('privcy')
                                            سياسة الخصوصية
                                                @break
                                            @case('vidoes')
                                            فيديوهات
                                                @break
                                            @case('partenar')
                                            شركائنا
                                                @break
                                        @endswitch
                                    </td>
                                    <td class="text-center"><img alt="detail" src="{{asset('/'.$photo->image)}}" class="responsive border-0 border-radius img-fluid mb-3" style="width: 40px" /></td>
                                    <td class="text-center"><a href="{{URL('/admin/header-photo-edite-'.$photo->id)}}" class="btn btn-sm btn-outline-primary">تعديل</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>{{$photos->links()}}</tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
