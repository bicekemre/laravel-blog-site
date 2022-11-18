    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/user") ? "active" : ""}}"
               href="/admin/user">
                <span data-feather="users"></span>
                User
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/blogs") ? "active" : ""}}"
               href="/admin/blogs">
                <span data-feather="users"></span>
                Blogs
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/contacts") ? "active" : ""}}"
               href="/admin/contacts">
                <span data-feather="grid"></span>
                Contact
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/resume") ? "active" : ""}}"
               href="/admin/resume">
                <span data-feather="grid"></span>
                Resume
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/projects") ? "active" : ""}}"
               href="/admin/projects">
                <span data-feather="grid"></span>
                Projects
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/contents") ? "active" : ""}}"
               href="/admin/contents">
                <span data-feather="grid"></span>
                Contents
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/messages") ? "active" : ""}}"
               href="/admin/messages">
                <span data-feather="grid"></span>
                Messages
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>


