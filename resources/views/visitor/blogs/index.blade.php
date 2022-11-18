@extends('visitor.theme')
@section("blogs", "colorlib-active")
@section("contents")
<section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover the Place</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore and travel</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
{{--        <div class="row justify-contents-center mb-5 pb-2">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                <h2 class="mb-4">Blogs</h2>--}}
{{--                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It--}}
{{--                    is a paradisematic country.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            @isset($blogs)
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="/blogs/{{ $blog->blog_id }}/sight">Topic</a></span>
                                <h3 class="mb-4"><a href="/blogs/{{ $blog->id }}/sight">{{ $blog->title }}</a></h3>
                                <p class="mb-4">{{ $blog->content }}</p>
                                <div class="author mb-4 d-flex align-items-center">
                                    <a href="/blogs/{{ $blog->blog_id }}/sight" class="img" style="background-image: url(images/person_2.jpg);"></a>
                                    <div class="ml-3 info">
                                        <span>Written by</span>
                                        <h3><a href="#">Writer Name</a>, <span>{{ $blog->created_at }}</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="meta-wrap align-items-center">
                                    <div class="half order-md-last">
                                        <p class="meta">
                                            <span><i class="icon-heart"></i>3</span>
                                            <span><i class="icon-eye"></i>100</span>
                                            <span><i class="icon-comment"></i>5</span>
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p><a href="/blogs/{{ $blog->blog_id }}/sight" class="btn py-2">Continue Reading <span
                                                    class="ion-ios-arrow-forward"></span></a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
        <div class="half">
            <p><a href="#" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
        </div>
    </div>

</section>
@endsection
