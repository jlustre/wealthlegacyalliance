<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container relative flex flex-wrap items-center justify-between">
        <a class="navbar-brand md:me-8" href="{{ route('home') }}">
            <span class="inline-block dark:hidden">
                <img src="{{ asset('assets/front/images/logo-dark.png') }}" class="l-dark" alt="">
                <img src="{{ asset('assets/front/images/logo-light.png') }}" class="l-light" alt="">
            </span>
            <img src="{{ asset('assets/front/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
        </a>

        <div class="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0">
                <li class="inline">
                @auth
                    <a href="{{ route('dashboard') }}" class="h-8 px-4 text-[12px] tracking-wider inline-flex items-center justify-center font-medium rounded-md bg-green-500 hover:bg-green-600 text-white uppercase transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="h-8 px-4 text-[12px] tracking-wider inline-flex items-center justify-center font-medium rounded-md bg-green-500 hover:bg-green-600 text-white uppercase transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="h-8 px-4 text-[12px] tracking-wider inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 hover:bg-yellow-600 text-white uppercase transition-colors">Register</a>
                @endauth
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu text-[24px]"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse">
            <ul class="navbar-nav nav-light sidebar-nav" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#steps">Steps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#review">Testimonials</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blogs</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
                @auth
                  <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link btn" type="submit">Sign Out</button>
                    </form>
                  </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
