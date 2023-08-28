@extends('layout.customer')

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
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد الذاكر التي جاري العمل عليها</span> {{\App\Models\Ticket::where('status','containe')->where('customer_id',Auth()->user()->id)->count()}} </p>
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
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد الذاكر التي تم الرد عليها</span> {{\App\Models\Ticket::where('status','accept')->where('customer_id',Auth()->user()->id)->count()}} </p>
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
                                <p class="lead text-white"><span style="font-family: 'Tajawal', sans-serif">عدد الذاكر التي تم اغلاقها </span> {{\App\Models\Ticket::where('status','close')->where('customer_id',Auth()->user()->id)->count()}} </p>
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
