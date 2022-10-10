@extends("admin.shared.theme")
@section("title","Projects")
@section("subtitle","")
@section("btn_url",url("admin/projects/create"))
@section("btn_label","Add Project")
@section("btn_icon","plus")
@section("content")
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @if(isset($projects))
            @foreach($projects as $project)
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $project->title }}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>{{ $project->content }}</li>
                                <br>
                                <br>
                                <li><h4>Project link</h4></li>
                                <li>{{ $project->link }}</li>
                                <li><h4>Github link</h4></li>
                                <li>{{ $project->github }}</li>
                                <li><h4>Used Techs</h4></li>
                                <li>{{ $project->techs }}</li>
                            </ul>
                            <div class="d-flex rounded-2 justify-content-between align-items-center shadow">
                                <div class="btn-group">
                                    <a type="button" href="/admin/projects/{{$project->project_id}}/show" class="btn btn-sm btn-outline-primary">Show</a>
                                    <a type="button" href="/admin/projects/{{$project->project_id}}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a type="button" href="/admin/projects/{{$project->project_id}}" class="btn list-item-delete btn-sm btn-outline-danger">Delete</a>
                                    @method('DELETE')
                                </div>
                                <small class="text-muted">{{$project->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center text-blue">Projects Not Found</p>
                </td>
            </tr>
        @endif
    </div>
@endsection
