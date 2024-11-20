<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active'=> request()->routeIs('home')])
                       aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active'=> request()->routeIs('users.index')])
                       aria-current="page" href="{{ route('users.index') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active'=>request()->routeIs('posts.index')]) href="{{ route('posts.index') }}">Articles</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active'=> request()->routeIs('contact')])
                       aria-current="page" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
