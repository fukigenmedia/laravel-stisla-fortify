<div>
    <!-- Sidebar outter -->
    <div class="main-sidebar sidebar-style-2">
        <!-- sidebar wrapper -->
        <aside id="sidebar-wrapper">
            <!-- sidebar brand -->
            <div class="sidebar-brand">
                <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <!-- menu header -->
                <li class="menu-header">General</li>
                <!-- menu item -->
                <li class="{{ Route::is('admin.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Route::is('admin.profile') ? 'active' : '' }}">
                    <a href="{{ route('admin.profile') }}">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
</div>