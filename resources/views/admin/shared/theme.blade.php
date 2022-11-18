<!doctype html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield("title")</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <x-head.tinymce-config/>
    <link href="{{asset("css/dashboard.css")}}" rel="stylesheet">
</head>
<body id="page-top">


<div id="wrapper">
@include("admin.shared.leftnav")
{{--<header class="navbar navbar-dark sticky-top navbarbg flex-md-nowrap p-0 shadow">--}}
{{--    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin">Personal Webpage</a>--}}
{{--    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"--}}
{{--            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"--}}
{{--            aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="navbar-nav">--}}
{{--        <div class="nav-item text-nowrap">--}}
{{--            <a class="nav-link px-3" href="/admin/logout">Log Out</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" c1lass="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>



                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">





                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/admin/logout" data-toggle="modal" data-target="#logoutModal">
                                @method("get")
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                    </li>

                </ul>

            </nav>


            <main class="col-md-9 ms-sm-auto bodybg col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between text-blue flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                    <h1 class="h2">@yield("title")</h1>
                    <div class="btn-toolbar  mb-2 mb-md-0">
                        <div class="btn-group  me-2">
                            <a href="@yield("btn_url")" class="btn btn-sm btn-outline-blue"><span
                                    data-feather="@yield("btn_icon")"></span> @yield("btn_label")</a>
                        </div>
                    </div>
                </div>
                <h2>@yield("subtitle")</h2>
                <div class="table-responsive text-blue ">
                    @yield("contents")
                </div>
                @include("admin.shared.footer")
            </main>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script type="text/javascript" src="{{asset("js/app.js")}}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
