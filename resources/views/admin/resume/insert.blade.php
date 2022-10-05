@extends("admin.shared.theme")
@section("title","Resume Module")
@section("subtitle","Add section")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url("/admin/resume")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}" placeholder="Enter title">
                @error("user_name")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="alt" class="form-label">Content no</label>
                <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter Section que">
                @error("alt")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <label for="content" class="form-label">Text</label>
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
