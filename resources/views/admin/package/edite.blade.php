@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/package-edite')}}" enctype="multipart/form-data">
                            @csrf
                            <input hidden name="id" value="{{$id}}">
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم الرئيسي بالعربية</label>
                                    <input name="title_head_ar" value="{{$data->title_head_ar}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم الرئيسي بالانجليزية</label>
                                    <input name="title_head_en" value="{{$data->title_head_en}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>لون الحقل الرئيسي </label>
                                    <input name="color_head" value="{{$data->color_head}}" required id="Name" type="color" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>السعر</label>
                                    <input name="price" value="{{$data->price}}" required id="Name" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم تحت السعر بالعربية</label>
                                    <input name="category_ar" value="{{$data->category_ar}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم تحت السعر بالانجليزية</label>
                                    <input name="category_en" value="{{$data->category_en}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>اسم الزر بالعربية</label>
                                    <input name="btn_ar" value="{{$data->btn_ar}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>اسم الزر بالانجليزية</label>
                                    <input name="btn_en" value="{{$data->btn_en}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>لون الزر</label>
                                    <input name="btn_color" value="{{$data->btn_color}}" required id="Name" type="color" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص عربي</h5>
                                    <textarea name="desc_ar" id="summernote" class="form-control" required>{{$data->desc_ar}}</textarea>
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص انجليزي</h5>
                                    <textarea name="desc_en" id="summernote2" class="form-control" required>{{$data->desc_en}}</textarea>
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





@section('script')


    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#summernote2').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

@endsection