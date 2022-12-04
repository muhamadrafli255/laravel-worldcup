<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">JoySport</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('teams') ? 'active' : '' }}" href="/teams">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('fixtures') ? 'active' : '' }}" href="/fixtures">Fixtures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('scores') ? 'active' : '' }}" href="/scores">Scores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                </li>
            </ul>
                <a href="" class="btn btn-outline-light">Login</a>
        </div>
    </div>
</nav>