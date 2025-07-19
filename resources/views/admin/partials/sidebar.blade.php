<div class="dashboard-sidebar bg-white">
    <div class="dashboard-nav">
        <div class="dashboard-logo p-3">
            <h4 class="text-primary">Real Estate Admin</h4>
        </div>
        
        <nav class="nav flex-column p-3">
            <h6 class="nav-title text-muted text-uppercase small fw-bold mb-3">Overview</h6>
            
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-tachometer-alt me-2"></i> Dashboard
            </a>
            
            <a class="nav-link" href="#">
                <i class="fa-solid fa-envelope me-2"></i> Messages
            </a>
            
            <h6 class="nav-title text-muted text-uppercase small fw-bold mb-3 mt-4">Manage Listing</h6>
            
            <a class="nav-link" href="{{ route('admin.properties.index') }}">
                <i class="fa-solid fa-home me-2"></i> All Properties
            </a>
            
            <a class="nav-link" href="{{ route('admin.properties.create') }}">
                <i class="fa-solid fa-plus me-2"></i> Add Property
            </a>
            
            <a class="nav-link" href="#">
                <i class="fa-solid fa-heart me-2"></i> Favorites
            </a>
            
            <h6 class="nav-title text-muted text-uppercase small fw-bold mb-3 mt-4">Account Settings</h6>
            
            <a class="nav-link" href="#">
                <i class="fa-solid fa-user me-2"></i> Profile
            </a>
            
            <a class="nav-link" href="#">
                <i class="fa-solid fa-cog me-2"></i> Settings
            </a>
            
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-sign-out-alt me-2"></i> Logout
            </a>
        </nav>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<style>
.dashboard-sidebar {
    min-height: 100vh;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
}

.nav-link {
    color: #6c757d;
    padding: 0.75rem 1rem;
    border-radius: 0.375rem;
    margin-bottom: 0.25rem;
    transition: all 0.3s;
}

.nav-link:hover, .nav-link.active {
    background-color: #e3f2fd;
    color: #1976d2;
}

.nav-title {
    letter-spacing: 1px;
}
</style>