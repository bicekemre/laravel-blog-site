@extends('visitor.theme')
@section("blogs", "colorlib-active")
@section("contents")
    @isset($content)
        <form action="{{url('admin/contents/update')}}" method="POST" autocomplete="off" novalidate>
            @csrf
            @method("PUT")
            <section class="home-slider js-fullheight owl-carousel">
                <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                            <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <label class="form-floating" for="floatingInput"><b>Title Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->blog_title1}}" name="blog_title1" placeholder="Title area">
                                @error("blog_title1")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label class="form-floating" for="floatingInput"><b>Content Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->blog_content1}}" name="blog_content1" placeholder="Content area">
                                @error("blog_content1")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                            <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <label class="form-floating" for="floatingInput"><b>Title Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->blog_title2}}" name="blog_title2" placeholder="Title area">
                                @error("blog_title1")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label class="form-floating" for="floatingInput"><b>Content Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->blog_content2}}" name="blog_content2" placeholder="Content area">
                                @error("blog_content2")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
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
