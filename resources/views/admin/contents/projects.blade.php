@extends('visitor.theme')
@section("projects", "colorlib-active")
@section("contents")
    @isset($content)
        <form action="{{url('admin/contents/update')}}" method="POST" autocomplete="off" novalidate>
            @csrf
            @method("PUT")
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">Projects</h2>
                            <label class="form-floating" for="floatingInput"><b>Title Area</b></label>
                            <input type="text" class="form-control" id="floatingInput"  value="{{$content->projects_content}}" name="projects_content" placeholder="Title area">
                            @error("projects_content")
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
