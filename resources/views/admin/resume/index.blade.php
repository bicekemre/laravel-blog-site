@extends("admin.shared.theme")
@section("title","Resume")
@section("subtitle","")
@section("btn_url",url("admin/resume/create"))
@section("btn_label","Add Section")
@section("btn_icon","plus")
@section("content")
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @if(count($sections) > 0)
            @foreach($sections as $section )
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                {{$section->title}}</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">{{ $section->content }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" href="/admin/resume/{{$section->section_id}}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a type="button" href="/admin/resume/{{$section->section_id}}" class="btn list-item-delete btn-sm btn-outline-danger">Delete</a>
                                    @method('DELETE')
                                </div>
                                <small class="text-muted">{{$section->alt}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center text-blue">sections Not Found</p>
                </td>
            </tr>
        @endif
    </div>


@endsection
