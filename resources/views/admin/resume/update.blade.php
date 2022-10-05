@extends("admin.shared.theme")
@section("title","Resume Module")
@section("subtitle","Update Section")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url('admin/resume/'.$section->section_id.'/edit')}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="section_id" value="{{$section->section_id}}">
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$section->title}}" placeholder="Enter title">
                @error("title")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="seq" class="form-label">Content no</label>
                <input type="text" class="form-control" id="seq" name="seq" placeholder="Enter Section que">
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <label for="text" class="form-label">Text</label>
                <textarea id="myeditorinstance" name="text">{{$section->content}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <button type="submit" class="btn btn-outline-blue mt-2">SAVE</button>
            </div>
        </div>
    </form>
@endsection
