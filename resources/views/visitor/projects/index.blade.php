@extends('visitor.theme')
@section("projects", "colorlib-active")
@section("contents")
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Projects</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                    is a paradisematic country.</p>
            </div>
        </div>
        <div class="row">
            @isset($projects)
                @foreach($projects as $project)
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="/projects/{{ $project->project_id }}/sight">Topic</a></span>
                                <h3 class="mb-4"><a href="/projects/{{ $project->id }}/sight">{{ $project->title }}</a></h3>
                                <p class="mb-4">{{ $project->content }}</p>
                                <div class="author mb-4 d-flex align-items-center">
                                    <a href="/projects/{{ $project->project_id }}/sight" class="img" style="background-image: url(images/person_2.jpg);"></a>
                                    <div class="ml-3 info">
                                        <span>Written by</span>
                                        <h3><a href="#">Writer Name</a>, <span>{{ $project->created_at }}</span>
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
                                        <p><a href="/projects/{{ $project->project_id }}/sight" class="btn py-2">Continue Reading <span
                                                    class="ion-ios-arrow-forward"></span></a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>

</section>
@endsection
