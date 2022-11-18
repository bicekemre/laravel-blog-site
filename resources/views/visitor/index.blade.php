@extends('visitor.theme')
@section("home", "colorlib-active")
@section("contents")
    <div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg)"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-8 text text-center">
                <div class="img mb-4" style="background-image: url(images/author.jpg)"></div>
                <div class="desc">
                    <h2 class="subheading">Hello I'm</h2>
                    <h1 class="mb-4">{{ $content->home_name }}</h1>
                    <p class="mb-4">{{ $content->home_content }}</p>
                    <p><a href="/about" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">

                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">About me</h2>
                    <p>{{ $content->home_about }}</p>
                </div>
            </div>
        </div>

    </section>
    <section class="ftco-section"  style="background-image: url(images/bg_1.jpg)">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2" >

                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">{{ $content->home_title }}</h2>
                    <p>{{ $content->home_content2 }}</p>
                </div>
            </div>
        </div>

    </section>
@endsection
