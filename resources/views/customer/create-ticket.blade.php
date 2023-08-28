@extends('layout.customer')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/customer/create-ticket')}}">
                            @csrf
                            <div class="tooltip-center-top position-relative form-group">
                                <label>الموقع</label>
                                <select name="site_name" class="form-control">
                                    @foreach ($sites as $site)
                                        <option value="{{$site->site_name}}">{{$site->site_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>الاهمية</label>
                                <select name="important" class="form-control">
                                    <option value="low">منخفضة</option>
                                    <option value="medium">متوسطه</option>
                                    <option value="high">مرتفعه</option>
                                </select>
                            </div>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>العنوان</label>
                                    <input name="title" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>الرسالة</label>
                                <textarea name="msg" required id="email" type="text" class="form-control"></textarea>
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