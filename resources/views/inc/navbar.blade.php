<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-2">
    <div class="container">
        <div>
            <a class="navbar-brand" href="{{ route('posts.index') }}">
                <i class="fab fa-blogger"></i> <span class="{{ request()->is('posts*') ? 'active font-weight-bold' : '' }}">JEG'S BLOG</span>
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-nav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a href="{{ route('pages.index') }}" class="nav-link {{ request()->is('/') ? 'active font-weight-bold' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.about') }}" class="nav-link {{ request()->is('about') ? 'active font-weight-bold' : '' }}">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.services') }}" class="nav-link {{ request()->is('services') ? 'active font-weight-bold' : '' }}">Services</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
