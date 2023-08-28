<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zero_tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('dash/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/font/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/quill.bubble.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/cropper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/main.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @yield('style')
</head>

<body id="app-container" class="menu-default show-spinner vertical boxed">
<nav class="navbar fixed-top">
    <div class="d-flex align-items-center navbar-left">

        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>

    </div>

    <div class="navbar-right">
        <div class="header-icons d-inline-block align-middle">
            <div class="d-none d-md-inline-block align-text-bottom mr-3">
                <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" data-toggle="tooltip" data-placement="left" title="Dark Mode">
                    <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                    <label class="custom-switch-btn" for="switchDark"></label>
                </div>
            </div>

            <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                <i class="simple-icon-size-fullscreen"></i>
                <i class="simple-icon-size-actual"></i>
            </button>

        </div>

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="name">{{Auth::user()->name}}</span>
                <span>
                        <img alt="Profile Picture" src="../dash/img/profiles/l-1.jpg" />
                    </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right mt-3">
                <a class="dropdown-item" href="/logout">
                    تسجيل الخروج
                </a>


            </div>
        </div>
    </div>
</nav>

<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li>
                    <a href="{{URL('/customer/home')}}">
                        <i class="iconsminds-home"></i>
                        <span>الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL('/customer/create-ticket')}}">
                        <i class="iconsminds-home"></i>
                        <span>فتح تذكره</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL('/customer/tickets')}}">
                        <i class="iconsminds-home"></i>
                        <span>التذاكر</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL('/customer/profile')}}">
                        <i class="iconsminds-home"></i>
                        <span>الملف الشخصي</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
@yield('content')

<script src="{{ asset('dash/js/vendor/quill.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
<script src="{{ asset('dash/js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/fullcalendar.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/glide.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/progressbar.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/select2.full.js') }}"></script>
<script src="{{ asset('dash/js/vendor/nouislider.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('dash/js/vendor/Sortable.js') }}"></script>
<script src="{{ asset('dash/js/vendor/mousetrap.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/cropper.min.js') }}"></script>
<script src="{{ asset('dash/js/dore.script.js') }}"></script>
<script src="{{ asset('dash/js/scripts.js') }}"></script>
<script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@yield('script')

</body>


</html>
