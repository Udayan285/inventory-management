
     <!-- Sidebar Start -->
     <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>iManagement</h3>
            </a>
            
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="admin-image" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    
                    <span>{{ ucfirst(Auth::user()->role) }}</span>
                </div>
            </div>

            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="nav-item nav-link"><i class="fa-brands fa-sellsy"></i>Sales</a>
                <a href="#" class="nav-item nav-link"><i class="fa-solid fa-cart-shopping"></i>Purchases</a>
                <a href="#" class="nav-item nav-link"><i class="fa-solid fa-parachute-box"></i>Products</a>
                <a href="#" class="nav-item nav-link"><i class="fa-solid fa-receipt"></i>Acounting reports</a>
                <a href="#" class="nav-item nav-link"><i class="fa-solid fa-truck-ramp-box"></i>Inventory tracking</a>
                <a href="#" class="nav-item nav-link"><i class="fa-solid fa-users"></i>User roles</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="button.html" class="dropdown-item">Buttons</a>
                    </div>
                </div> --}}
            
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
