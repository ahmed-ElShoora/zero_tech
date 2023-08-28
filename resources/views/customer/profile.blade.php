@extends('layout.customer')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/customer/profile')}}">
                            @csrf
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم</label>
                                    <input name="name" value="{{$data->name}}" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>رقم الهاتف</label>
                                <input name="old_phone" hidden value="{{$data->phone}}" required id="email" type="text" class="form-control">
                                <input name="phone" value="{{$data->phone}}" required id="email" type="text" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>البريد الاكتروني</label>
                                <input name="email" value="{{$data->email}}" required id="email" type="email" class="form-control">
                            </div>
                            <div class="tooltip-center-bottom position-relative form-group">
                                <label>كلمة المرور</label>
                                <input name="password" value="{{$data->password_hash}}" required id="password" type="text" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>المدينة</label>
                                <input name="town" value="{{$data->town}}" required id="email" type="text" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>الجنس</label>
                                <select name="gender" class="form-control">
                                    <option value="male" 
                                        @if($data->gender == 'male')
                                            selected
                                        @endif
                                    >ذكر</option>
                                    <option value="female"
                                        @if($data->gender == 'female')
                                            selected
                                        @endif
                                    >انثي</option>
                                </select>
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