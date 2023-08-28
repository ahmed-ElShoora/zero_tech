@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">مراحل المشروع</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/level')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الصورة بالعربي</label>
                                    <input name="level_image_ar" id="Name" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الصورة بالانجليزي</label>
                                    <input name="level_image_en" id="Name" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص عربي</h5>
                                    <textarea name="level_text_ar" id="summernote" class="form-control" required>{{$level_text_ar}}</textarea>
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <h5 class="">النص انجليزي</h5>
                                    <textarea name="level_text_en" id="summernote2" class="form-control" required>{{$level_text_en}}</textarea>
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