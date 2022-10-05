    <ul class="nav flex-column text-light">
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
    </ul>

