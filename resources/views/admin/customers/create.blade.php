@extends('layout.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء مستخدم جديد</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                        <form method="post" action="{{URL('/admin/customer-create')}}">
                            @csrf
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>الاسم</label>
                                    <input name="name" required id="Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>رقم الهاتف</label>
                                <input name="phone" required id="email" type="text" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>البريد الاكتروني</label>
                                <input name="email" required id="email" type="email" class="form-control">
                            </div>
                            <div class="tooltip-center-bottom position-relative form-group">
                                <label>كلمة المرور</label>
                                <input name="password" required id="password" type="password" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>المدينة</label>
                                <input name="town" required id="email" type="text" class="form-control">
                            </div>
                            <div class="tooltip-center-top position-relative form-group">
                                <label>الجنس</label>
                                <select name="gender" class="form-control">
                                    <option value="male">ذكر</option>
                                    <option value="female">انثي</option>
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