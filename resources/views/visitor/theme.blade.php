@php
    use App\Models\Contact;
  $contact = Contact::where('id', 1)->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Yunus Emre Biçek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="">

<div id="colorlib-page">

    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    @include('visitor.leftnav')
    <div id="colorlib-main">
        @yield("contents")
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container px-md-5">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2">Category</h2>
                            <ul class="list-unstyled categories">
                                <li><a href="/projects">My Projects </a></li>
                                <li><a href="/blogs">Blogs </a></li>
                                <li><a href="/resume">Resume </a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Social Media</h2>
                            <ul class="list-unstyled categories">
                                <li><a href="{{ $contact->facebook }}" target="_blank">Facebook<span class="icon-facebook-square"></span> </a></li>
                                <li><a href="{{ $contact->twitter }}" target="_blank">Twitter <span class="icon-twitter-square"></span></a></li>
                                <li><a href="{{ $contact->instagram }}" target="_blank">Instagram <span class="icon-instagram"></span></a></li>
                                <li><a href="{{ $contact->github }}" target="_blank">Github <span class="icon-github-square"></span></a></li>
                                <li><a href="{{ $contact->linkedin }}" target="_blank">Linledin <span class="icon-linkedin-square"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">{{ $contact->address }}</span>
                                    </li>
                                    <li><a href="{{ $contact->phone }}"><span class="icon icon-phone"></span><span
                                                class="text">{{ $contact->phone }}</span></a></li>
                                    <li><a href="{{ $contact->email }}"><span class="icon icon-envelope"></span><span
                                                class="text">{{ $contact->email }}</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<script src="{{ asset('/js/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('/js/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('/js/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/js/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('/js/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/js/aos.js') }}"></script>
<script src="{{ asset('/js/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('/js/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('/js/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('/js/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('/js/js/google-map.js') }}"></script>
<script src="{{ asset('/js/js/main.js') }}"></script>
</body>

</html>
