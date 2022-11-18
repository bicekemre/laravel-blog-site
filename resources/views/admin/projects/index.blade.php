@extends("admin.shared.theme")
@section("title","Projects")
@section("subtitle","")
@section("btn_url",url("admin/projects/create"))
@section("btn_label","Add Project")
@section("btn_icon","plus")
@section("contents")
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
                                <li><h4>Used Techs :</h4></li>
                                <li>{{ $project->techs }}</li>
                            </ul>
                            <div class="col mb-4">
                                <ul class="nav mt-3 justify-content-center list-unstyled d-flex">
                                    <li class="ms-3"><a class="text-muted" href="{{ $project->github }}"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a></li>
                                    <li class="ms-3 ftco-animate"><a class="text-muted" href="{{ $project->link }}" target="_blank"><svg href="/public/fonts/globe.svg"></svg></a></li>
                                </ul>
                            </div>
                            <div class="d-flex rounded-2 justify-content-between align-items-center shadow">
                                <div class="btn-group">
                                    <a type="button" href="/projects/{{$project->project_id}}/sight" class="btn btn-sm btn-outline-primary">Show</a>
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
