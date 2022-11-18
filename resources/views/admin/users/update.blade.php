@extends("admin.shared.theme")
@section("title","Users Module")
@section("subtitle","Update User")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("contents")
    <form action="{{route('user.update', [$user->id])}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->user_name}}" placeholder="Enter User name">
                @error("name")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                @error("password")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter password again">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> Save</button>
            </div>
        </div>
    </form>
@endsection
