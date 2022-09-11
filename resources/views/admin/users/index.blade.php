@extends("admin.shared.theme")
@section("title","Users")
@section("subtitle","")
@section("btn_url",url("admin/user/create"))
@section("btn_label","Add User")
@section("btn_icon","plus")
@section("content")
    <table class="table table-striped text-blue table-sm">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">User Name</th>
            <th scope="col">Processes</th>
        </tr>
        </thead>
        <tbody>
        @if(count($users) > 0)
            @foreach($users as $user)
                <tr {{$user->user_id}}>
                    <td>1</td>
                    <td>{{$user->user_name}}</td>
                    <td>
                        <ul class="nav float-start">
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="{{url("/admin/user/$user->id/edit")}}">
                                    <span data-feather="edit"></span>
                                    Update
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light list-item-delete btn btn-danger btn-sm"
                                   href="{{url("/admin/user/$user->id")}}">
                                    <span data-feather="trash-2"></span>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center text-blue">Users Not Found</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
