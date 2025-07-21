<div class="left-sidebar-block bg-dark p-0">
    <div class="dashboard-logo">
       <h4 class="logo">Admin Panel</h4>
    </div>
    <nav class="dashboard-nav nav-light pb-3" id="navbarSupportedContent">
        <ul class="navbar-nav left-collaps-nav">
            <h5 class="dashboard-nav-title">Overview</h5>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="fa-solid fa-layer-group"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-envelope"></i> Message
                </a>
            </li>
            
            <h5 class="dashboard-nav-title">Manage Listing</h5>
            <li class="nav-item db-dropdown">
                <a class="nav-link dropdown-toggle" href="#">
                    <i class="fa-solid fa-house"></i> My Properties
                </a>
                <ul class="db-dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.properties.index') ? 'active' : '' }}" href="{{ route('admin.properties.index') }}">General Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.properties.index') }}">Element Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-heart"></i> My Favorite
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.properties.create') ? 'active' : '' }}" href="{{ route('admin.properties.create') }}">
                    <i class="fa-solid fa-paper-plane"></i> Submit Property
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-star"></i> Reviews
                </a>
            </li>
            
            <h5 class="dashboard-nav-title">Account Settings</h5>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-user"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-wrench"></i> Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>
    </nav>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>