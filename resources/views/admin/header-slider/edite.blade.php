@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/header-photo-edite')}}" enctype="multipart/form-data">
                            @csrf
                            <input name="id" value="{{$id}}" hidden>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الصورة</label>
                                    <input name="image" required id="Name" type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
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
