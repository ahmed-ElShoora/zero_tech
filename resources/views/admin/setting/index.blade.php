@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>الاعدادات</h1>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card" style="overflow: auto">
                    <div class="card-body">
                        <form action="{{URL('/admin/setting')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="error-l-100 position-relative form-group">
                                <label>اللوجو</label>
                                <input name="logo" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                            </div>
                            <div class="error-l-100 position-relative form-group">
                                <label>لوجو الفوتر</label>
                                <input name="logo_footer" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                            </div>
                            <div class="error-l-100 position-relative form-group">
                                    <label>لون خلفية سلايدر الرئيسية</label>
                                    <input name="slider_color" value="{{$slider_color}}" required type="color" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group">
                                    <label>عنوان الموقع</label>
                                    <input name="meta_title" value="{{$meta_title}}" required type="text" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group">
                                    <label>وصف الموقع</label>
                                    <input name="meta_desc" value="{{$meta_desc}}" required type="text" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group">
                                    <label>فيسبوك</label>
                                    <input name="facebook" value="{{$facebook}}" required type="url" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group" hidden>
                                    <label>انستقرام</label>
                                    <input name="insta" value="{{$insta}}" required type="url" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group">
                                    <label>linked in</label>
                                    <input name="snapchat" value="{{$snapchat}}" required type="url" class="form-control">
                                </div>
                                <div class="error-l-100 position-relative form-group">
                                    <label>تويتر</label>
                                    <input name="twitter" value="{{$twitter}}" required type="url" class="form-control">
                                </div>
                            <button class="btn btn-primary mt-5" type="submit">تاكيد</button>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
