@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>المحتوي</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                </nav>
                <div class="separator mb-5"></div>
            </div>
            <div class="col-lg-12 col-xl-12">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4 progress-banner">
                    <div class="card-body text-center justify-content-between d-flex flex-row align-items-center">
                        <div class="card-body text-center">
                            <i class="simple-icon-home mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد زوار الموقع</span> {{\App\Models\View::count()}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4 progress-banner">
                    <div class="card-body text-center justify-content-between d-flex flex-row align-items-center">
                        <div class="card-body text-center">
                            <i class="simple-icon-arrow-up-circle mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد الاتصالات الداخلية</span> {{\App\Models\Contact::count()}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4 progress-banner">
                    <div class="card-body text-center justify-content-between d-flex flex-row align-items-center">
                        <div class="card-body text-center">
                            <i class="simple-icon-arrow-up-circle mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد المشرفين</span> {{\App\Models\Admin::count()}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4 progress-banner">
                    <div class="card-body text-center justify-content-between d-flex flex-row align-items-center">
                        <div class="card-body text-center">
                            <i class="simple-icon-arrow-up-circle mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد المقالات</span> {{\App\Models\Post::count()}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-8 mb-4">
        </div>
    </div>
    </div>
</main>
@endsection
