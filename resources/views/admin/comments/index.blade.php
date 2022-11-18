@extends("admin.shared.theme")
@section("title","Comments")
@section("subtitle","")
@section("btn_url",url("admin/blogs"))
@section("btn_label","Turn Back")
@section("btn_icon","plus")
@section("contents")
    <table class="table table-striped text-blue table-sm">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">message</th>
        </tr>
        </thead>
        <tbody>
        @isset($comments)
            @foreach($comments as $comment)

                <tr {{$comment->id}}>
                    <td> {{$comment->name}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->message}}</td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
@endsection
