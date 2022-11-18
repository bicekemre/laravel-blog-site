@extends("admin.shared.theme")
@section("title","Messages")
@section("subtitle","")
@section("btn_url",url("admin"))
@section("btn_label","Turn Back")
@section("btn_icon","plus")
@section("contents")
    <table class="table table-striped text-blue table-sm">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">subject</th>
            <th scope="col">message</th>
        </tr>
        </thead>
        <tbody>
        @isset($messages)
            @foreach($messages as $message)

                <tr {{$message->id}}>
                    <td> {{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->message}}</td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
@endsection

