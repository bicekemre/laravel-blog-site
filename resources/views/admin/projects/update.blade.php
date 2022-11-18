@extends("admin.shared.theme")
@section("title","Blogs Module")
@section("subtitle","New Blog")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("contents")
    <form action="{{url('admin/projects/{project}/edit')}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="project_id" value="{{$project->project_id}}">
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" placeholder="Enter title">
                @error("title")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="content" class="form-label">Used Techs</label>
                <input type="text" class="form-control" id="techs" name="techs" value="{{ $project->techs }}" placeholder="Enter title">
                @error("techs")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="content" class="form-label">Project Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $project->link }}" placeholder="Enter title">
                @error("link")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="content" class="form-label">Github Link</label>
                <input type="text" class="form-control" id="github" name="github" value="{{ $project->github }}" placeholder="Enter title">
                @error("github")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-12 ">
                <label for="text" class="form-label">Content</label>
                <textarea id="myeditorinstance" value="{{$project->content}}" name="content" ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <button type="submit" class="btn btn-outline-blue mt-2">SAVE</button>
            </div>
        </div>
    </form>
@endsection
