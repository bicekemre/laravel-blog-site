    <ul class="nav flex-column text-light">
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/admin/user") ? "active" : ""}}"
               href="/admin/user">
                <span data-feather="users"></span>
                User
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/users") ? "active" : ""}}"
               href="/users">
                <span data-feather="users"></span>
                Blogs
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/categories") ? "active" : ""}}"
               href="/categories">
                <span data-feather="grid"></span>
                Contact
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{Str::of(url()->current())->contains("/products") ? "active" : ""}}"
               href="/products">
                <span data-feather="grid"></span>
                CV
            </a>
        </li>
    </ul>

