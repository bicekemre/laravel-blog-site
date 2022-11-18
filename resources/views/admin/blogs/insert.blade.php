@extends("admin.shared.theme")
@section("title","Blogs Module")
@section("subtitle","New Blog")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("contents")
    <form action="{{url("/admin/blogs")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                @error("title")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-12 ">
                <label for="text" class="form-label">Text</label>
                <x-forms.tinymce-editor/>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <button type="submit" class="btn btn-outline-blue mt-2">SAVE</button>
            </div>
        </div>

    </form>

@endsection
