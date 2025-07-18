<!--============== Header Section Start ==============-->
<header class="main-header header-style-1 header-absolute">
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg nav-white nav-active-primary nav-hover-primary nav-line-active">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="nav-logo" src="{{ asset('assets/images/logo/logo-full-white.png') }}" alt="Real Estate">
                        </a>
                        
                        <button class="mobile-login" title="Login or Registration" data-bs-toggle="modal" data-bs-target="#loginmodal">
                            <i class="fa-regular fa-user"></i>
                        </button>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('properties.index') }}">Properties</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agents.index') }}">Agents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            
                            <div class="user-panel">
                                @auth
                                    <div class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle fw-semibold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                            <i class="fa-regular fa-user"></i> {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('agent'))
                                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                                            <li><a class="dropdown-item" href="#">Favorites</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                            <a href="{{ route('login') }}" class="fw-semibold" title="Login or Registration">
                                                <i class="fa-regular fa-user"></i> Login
                                            </a>
                                @endauth
                            </div>
                            
                            @auth
                                @if(Auth::user()->hasRole('agent'))
                                    <a href="{{ route('admin.properties.create') }}" class="btn btn-primary btn-hover-secondary hover-flash-move">+ Add Property</a>
                                @endif
                            @else
                                <a href="#" class="btn btn-primary btn-hover-secondary hover-flash-move" data-bs-toggle="modal" data-bs-target="#loginmodal">+ Add Property</a>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============== Header Section End ==============-->

<!-- Login Modal (for non-authenticated users) 
@guest
<div class="modal fade login-modal" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">User Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body user-login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row row-cols-1 g-3">
                        <div class="col">
                            <label class="access-field">
                                <i class="fa-solid fa-user"></i> 
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            </label>
                        </div>
                        <div class="col">
                            <label class="access-field">
                                <i class="fa-solid fa-lock"></i> 
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </label>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <label><input type="checkbox" name="remember"> Remember me</label>
                                <span><a href="{{ route('password.request') }}">Forgot Password</a></span>
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-secondary hover-flash-move w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <a href="{{ route('register') }}" class="text-dark d-table font-primary fw-medium ls-1 hover-color-primary">
                    <u>Don't Have Account? Click Here.</u>
                </a>
            </div>
        </div>
    </div>
</div>
@endguest-->