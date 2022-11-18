@extends("admin.shared.theme")
@section("title","Contents")
@section("subtitle","")
@section("btn_url",url("/"))
@section("btn_label","Visitor Pages")
@section("contents")
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/home">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%"   fill="#eceeef" dy=".3em">Home Page</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/blogs">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%" fill="#eceeef" dy=".3em">Blog Page</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/contacts">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%" fill="#eceeef" dy=".3em">Contact Page</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/resume">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect class="btn-outline-primary" width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%" fill="#eceeef" dy=".3em">Resume Page</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/projects ">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%" fill="#eceeef" dy=".3em">Projects Page</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contents/about">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="40%" y="50%" fill="#eceeef" dy=".3em">About Page</text>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection

