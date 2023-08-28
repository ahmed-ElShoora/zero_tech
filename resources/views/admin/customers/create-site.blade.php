@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء موقع جديد</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/customer-create-site')}}">
                            @csrf
                            <input hidden name="customer_id" required value="{{$id}}">
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>اسم الموقع</label>
                                    <input name="site_name" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>رابط الموقع</label>
                                    <input name="site_link" required id="Name" type="url" class="form-control">
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