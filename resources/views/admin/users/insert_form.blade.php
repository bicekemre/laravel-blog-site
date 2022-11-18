@extends("admin.shared.theme")
@section("title","Users Module")
@section("subtitle","New User")
@section("btn_url",url()->previous())
@section("btn_label","Turn Back")
@section("btn_icon","arrow-left")
@section("contents")
    <form action="{{url("/admin/user")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="{{old("name")}}" placeholder="Enter User name">
                @error("user_name")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 align-content-center">
                <label for="number" class="form-label">Number</label>
                <input type="text" class="form-control" id="number" name="number" value="{{old("name")}}" placeholder="Enter Number">
                @error("user_name")
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
            <div class="col-12 ">
                <button type="submit" class="btn btn-outline-blue mt-2">SAVE</button>
            </div>
        </div>
    </form>
@endsection
