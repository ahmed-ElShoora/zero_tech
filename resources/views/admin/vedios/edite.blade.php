@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/vedio-edite')}}" enctype="multipart/form-data">
                            @csrf
                            <input hidden name="id" value="{{$id}}">
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الصورة</label>
                                    <input hidden name="old_image" value="{{$data->image}}">
                                    <input name="image" id="Name" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالعربية</label>
                                    <input name="text_ar" value="{{$data->text_ar}}" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم بالانجليزية</label>
                                    <input name="text_en" value="{{$data->text_en}}" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>iframe youtube</label>
                                    <input name="link" value="{{$data->link}}" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">تاكيد</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
