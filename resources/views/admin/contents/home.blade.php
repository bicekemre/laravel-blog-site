@extends('visitor.theme')
@section("home", "colorlib-active")
@section("contents")
    @isset($content)
        <form action="{{url('admin/contents/update')}}" method="POST" autocomplete="off" novalidate>
            @csrf
            @method("PUT")
            <div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg)"
                 data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="js-fullheight d-flex justify-content-center align-items-center">
                    <div class="col-md-8 text text-center">
                        <div class="img mb-4" style="background-image: url(ismages/author.jpg)"></div>
                        <div class="desc">
                            <h2 class="subheading">Hello I'm</h2>
                            <label class="form-floating" for="floatingInput"><b>Name Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->home_name}}" name="home_name" placeholder="Name area">
                            @error("home_name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <label class="form-floating" for="floatingInput"><b>Content Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->home_content}}" name="home_content" placeholder="Content Area">
                            @error("home_name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <p><a href="#" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">

                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">About me</h2>
                            <label class="form-floating" for="floatingInput"><b>About Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->home_about}}" name="home_about" placeholder="Content Area">
                            @error("home_name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

            </section>
            <section class="ftco-section"  style="background-image: url(images/bg_1.jpg)">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2" >

                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <label class="form-floating" for="floatingInput"><b>title Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->home_title}}" name="home_title" placeholder="Content Area">
                            @error("home_name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <label class="form-floating" for="floatingInput"><b>home content2 Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->home_content2}}" name="home_content2" placeholder="Content Area">
                            @error("home_name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2" >
                <button type="submit" class= "btn btn-outline-primary">SAVE
                </button>
                </div>
            </div>
        </form>
    @endisset
@endsection
