<div>
    <!-- navbar background color -->
    <div class="navbar-bg"></div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <!-- navbar nav left -->
        <form class="form-inline mr-auto">
            <!-- navbar toggler -->
            <ul class="navbar-nav mr-3">
                <li>
                    <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li>
                    <span class="badge badge-light mt-1 ml-3">Admin</span>
                </li>
            </ul>
        </form>
        <!-- navbar right -->
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ auth()->user()->avatar_url }}" width="30" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">
                        Hi, {{ auth()->user()->name }}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="features-profile.html" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <a href="features-settings.html" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>