@extends("admin.shared.theme")
@section("title","Mainpage")
@section("subtitle","")
@section("content")
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/user">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="50%" y="50%" fill="#eceeef" dy=".3em">User</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/blogs">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="50%" y="50%" fill="#eceeef" dy=".3em">Blogs</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/contact">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="50%" y="50%" fill="#eceeef" dy=".3em">Contact</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/resume
                ">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="50%" y="50%" fill="#eceeef" dy=".3em">Resume</text>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col" >
            <div class="card shadow-sm">
                <a href="/admin/projects
                ">
                    <svg class=" card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text style="font-size: 20px" x="50%" y="50%" fill="#eceeef" dy=".3em">Projects</text>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
