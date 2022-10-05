@extends("admin.shared.theme")
@section("title","Blogs Module")
@section("subtitle","Update Blog")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{route('blogs.update', [$blog->blog_id])}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="blog_id" value="{{$blog->blog_id}}">
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" placeholder="Enter title">
                @error("title")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <label for="text" class="form-label">Text</label>
                <textarea id="myeditorinstance" name="content">{{$blog->content}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> Save</button>
            </div>
        </div>
    </form>
@endsection
