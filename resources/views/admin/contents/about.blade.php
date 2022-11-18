@php
    use App\Models\Contact;
   $contact = Contact::where('id', 1)->first();
@endphp
@extends('visitor.theme')
@section('about', 'colorlib-active')
@section("contents")

    <div id="colorlib-page">
        <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    <div class="img mb-4" style="background-image: url(imagses/author.jpg);"></div>
                    <div class="desc">
                        <h2 class="subheading">Hello I'm</h2>
                        @isset($content)
                            <form action="{{url('admin/contents/update')}}" method="POST" autocomplete="off" novalidate>
                                @csrf
                                @method("PUT")
                                <label class="form-floating" for="floatingInput"><b>Name Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->about_name}}" name=about_name" placeholder="Name area">
                                @error("home_name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label class="form-floating" for="floatingInput"><b>Content Area</b></label>
                                <input type="text" class="form-control" id="floatingInput"  value="{{$content->about_content}}" name="about_content" placeholder="Content Area">
                                @error("home_name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <br>
                                <div class="container">
                                    <div class="row justify-content-center mb-5 pb-2" >
                                        <button type="submit" class= "btn btn-outline-primary">SAVE
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endisset
                        <ul class="ftco-social mt-3">
                            @isset($contact->twitter)<li class="ftco-animate"><a href="{{ $contact->twitter }}" target="_blank"><span class="icon-twitter"></span></a></li>@endisset
                            @isset($contact->facebook)<li class="ftco-animate"><a href="{{ $contact->facebook }}" target="_blank"><span class="icon-facebook"></span></a></li>@endisset
                            @isset($contact->instagram)<li class="ftco-animate"><a href="{{ $contact->instagram }}" target="_blank"><span class="icon-instagram"></span></a></li>@endisset
                            @isset($contact->linkedin)<li class="ftco-animate"><a href="{{ $contact->linkedin }}" target="_blank"><span class="icon-linkedin"></span></a></li>@endisset
                            @isset($contact->github)<li class="ftco-animate"><a href="{{ $contact->github }}" target="_blank"><span class="icon-github"></span></a></li>@endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
