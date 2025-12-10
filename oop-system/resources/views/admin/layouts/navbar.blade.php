<!-- app-header -->
<header class="app-header sticky" id="header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{asset('backend/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                        <img src="{{asset('backend/assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                        <img src="{{asset('backend/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                        <img src="{{asset('backend/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                        <img src="{{asset('backend/assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
                        <img src="{{asset('backend/assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element mx-lg-0 mx-2">
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
                <!-- Start::header-link -->
                <input type="text" class="header-search-bar form-control" id="header-search" placeholder="Search anything here ..." spellcheck=false autocomplete="off" autocapitalize="off">
                <a href="javascript:void(0);" class="header-search-icon border-0">
                    <i class="ri-search-line"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <ul class="header-content-right">

            <!-- Start::header-element -->
            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#header-responsive-search">
                    <!-- Start::header-link-icon -->
                    <i class="bi bi-search header-link-icon"></i>
                    <!-- End::header-link-icon -->
                </a>  
            </li>
            <!-- End::header-element --> 

            <!-- Start::header-element -->
            <li class="header-element dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src=" {{ asset('backend/assets/images/faces/15.jpg') }}" alt="img" class="avatar avatar-sm">
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li>
                        <div class="dropdown-item text-center border-bottom">
                            <span>
                                {{ Auth::user()->name }}
                            </span>
                            <span class="d-block fs-12 text-muted">{{ Auth::user()->email }}</span>
                        </div>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="fe fe-user p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail.html"><i class="fe fe-mail p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Mail Inbox</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="file-manager.html"><i class="fe fe-database p-1 rounded-circle bg-primary-transparent klist me-2 fs-16"></i>File Manger<span class="badge bg-primary1 text-fixed-white ms-auto fs-9">2</span></a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i class="fe fe-settings p-1 rounded-circle bg-primary-transparent ings me-2 fs-16"></i>Settings</a></li>
                    <li class="border-top bg-light"><a class="dropdown-item d-flex align-items-center" href="chat.html"><i class="fe fe-help-circle p-1 rounded-circle bg-primary-transparent set me-2 fs-16"></i>Help</a></li>
                    <li><form method="POST", action="{{ route('logout') }}">
                            @csrf
                            <button type="submit", class="dropdown-item d-flex align-items-center w-100 border-0 bg-transparent">
                                <i class="fe fe-log-out p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>  
            <!-- End::header-element -->

        </ul>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
<!-- /app-header -->