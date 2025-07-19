<header class="dashboard-header bg-white border-bottom py-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">Admin Dashboard</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end align-items-center">
                    <span class="me-3">
                        <i class="fa-solid fa-home text-primary"></i>
                        Properties: <strong>{{ Auth::user()->properties->count() ?? 0 }}</strong>
                    </span>
                    
                    <div class="dropdown">
                        <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('assets/images/user-placeholder.png') }}" alt="User" width="20" height="20" class="rounded-circle me-1">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}">View Website</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<form id="logout-form-header" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>