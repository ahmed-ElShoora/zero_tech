@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء سلايد جديد</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/slider-create')}}">
                            @csrf
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>اللون</label>
                                    <input name="color" required id="Name" type="color" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>النص العربي</label>
                                    <input name="text_ar" required="" id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>النص الانجليزي</label>
                                    <input name="text_en" required="" id="Name" type="text" class="form-control">
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
