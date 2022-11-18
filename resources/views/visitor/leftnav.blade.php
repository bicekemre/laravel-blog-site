<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="/">yeb<span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="@yield('home')"><a href="/">Home</a></li>
            <li class="@yield('projects')"><a href="projects">My Projects</a></li>
            <li class="@yield('blogs')"><a href="blogs">Blogs</a></li>
            <li class="@yield('resume')"><a href="resume">Resume</a></li>
            <li class="@yield('about')"><a href="about">About</a></li>
            <li class="@yield('contact')"><a href="contact">Contact</a></li>
        </ul>
    </nav>

    <nav>
        <a href="/download" class="btn btn-outline-secondary"><i class="icon-download-alt"> </i> Download Cv </a>
    </nav>

    @if(\Illuminate\Support\Facades\Auth::check())
        <nav class="mt-4">
            <a href="/admin/contents/home" class="btn btn-danger">Edit Pages</a>
        </nav>
    @endif

    <div class="colorlib-footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                href="https://colorlib.com" target="_blank">Colorlib</a>
        <ul>
            <li><a href="{{ $contact->facebook }}" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="{{ $contact->twitter }}" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a href="{{ $contact->instagram }}" target="_blank"><i class="icon-instagram"></i></a></li>
            <li><a href="{{ $contact->github }}" target="_blank"><i class="icon-github"></i></a></li>
            <li><a href="{{ $contact->linkedin }}" target="_blank"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->
