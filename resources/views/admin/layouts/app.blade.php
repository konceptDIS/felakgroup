<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="/img/aedc-logo.png">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/png" />
    <!--plugins-->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/header-colors.css')}}" rel="stylesheet" />

    <title>AEDC - KCT Dashboard</title>

    <style>
        .message-alert{
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 999;
        }
        <style>
    /* Custom pagination styling */
    .custom-pagination .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .custom-pagination .pagination li {
        margin: 0 5px;
    }

    .custom-pagination .pagination li a {
        padding: 8px 12px;
        border-radius: 5px;
        color: #333;
        background-color: #f0f0f0;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .custom-pagination .pagination li a:hover {
        background-color: #ddd;
    }

    .custom-pagination .pagination .active a {
        background-color: #007bff;
        color: #fff;
    }
</style>

    </style>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        @include('partials.header')

        @include('partials.sidebar')

        @include('partials.messages')
        @yield('content')

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        {{-- @include('partials.switcher') --}}
    </div>
    <!--end wrapper-->

    @include('partials.bottom-scripts')

</body>

</html>
