<!--============== Header Section Start ==============-->
<header class="dashboard-header border-bottom bg-white">
    <div class="main-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover py-0">
                        <div class="navbar-collapse justify-content-between">
                            <ul class="navbar-nav status-bar">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Dashboard Options</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Messages</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.properties.index') }}">My Listing</a></li>
                                        <li><a class="dropdown-item" href="#">My Account</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.properties.create') }}">Submit Property</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-bell color-primary"></i><sup>0</sup></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-comment color-primary"></i><sup>0</sup></a>
                                </li>
                            </ul>
                            <ul class="navbar-nav user-option">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Properties: <span class="color-primary fw-semibold">{{ Auth::user()->properties->count() ?? 0 }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="{{ asset('assets/images/user1.jpg') }}" alt=""> Hi, {{ Auth::user()->name }}</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============== Header Section End ==============-->