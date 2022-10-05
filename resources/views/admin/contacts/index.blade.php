@extends("admin.shared.theme")
@section("title","Contacts")
@section("subtitle","")
@section("btn_url",url("admin"))
@section("btn_label","Turn Back")
@section("btn_icon","plus")
@section("content")
    @if(isset($contact) == true)
        <form action="{{url('admin/contacts')}}" method="POST" autocomplete="off" novalidate>
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}" placeholder="Enter email">
                    @error("name")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}" placeholder="Enter phone">
                    @error("phone")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="instagram" class="form-label">instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{$contact->instagram}}" placeholder="Enter instagram">
                    @error("instagram")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="linkedin" class="form-label">linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$contact->linkedin}}" placeholder="Enter linkedin">
                    @error("linkedin")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="facebook" class="form-label">facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$contact->facebook}}" placeholder="Enter facebook">
                    @error("facebook")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="github" class="form-label">github</label>
                    <input type="text" class="form-control" id="github" name="github" value="{{$contact->github}}" placeholder="Enter github">
                    @error("github")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 align-content-center">
                    <label for="pinterest" class="form-label">pinterest</label>
                    <input type="text" class="form-control" id="pinterest" name="pinterest" value="{{$contact->pinterest}}" placeholder="Enter pinterest">
                    @error("pinterest")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> Save</button>
                </div>
            </div>
        </form>
    @else()
        <form action="contacts/create"  method="post" autocomplete="off" novalidate>
            @csrf
            @method("post")
            <input type="hidden" name="id" value="1">
            <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> Create Contacts</button>
        </form>
    @endif
@endsection
