<aside class="app-sidebar sticky" id="sidebar">
    

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src=" {{ asset('backend/assets/images/brand-logos/toggle-dark.png') }} " alt="logo" class="toggle-dark">
                    <img src=" {{ asset('backend/assets/images/brand-logos/desktop-logo.png') }} " alt="logo" class="desktop-logo">
                    <img src=" {{ asset('backend/assets/images/brand-logos/desktop-dark.png') }} " alt="logo" class="desktop-dark">
                    <img src=" {{ asset('backend/assets/images/brand-logos/toggle-logo.png') }} " alt="logo" class="toggle-logo">
                    <img src=" {{ asset('backend/assets/images/brand-logos/toggle-white.png') }} " alt="logo" class="toggle-white">
                    <img src=" {{ asset('backend/assets/images/brand-logos/desktop-white.png') }} " alt="logo" class="desktop-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                                <span class="side-menu__label">Dashboards</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Dashboards</a>
                                </li>
                                <li class="slide">
                                    <a href="index.html" class="side-menu__item">Overview</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ route('categories.index') }}" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column-stacked-icon lucide-chart-column-stacked ml-2 side-menu__icon">
                                    <path d="M11 13H7"/>
                                    <path d="M19 9h-4"/>
                                    <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
                                    <rect x="15" y="5" width="4" height="12" rx="1"/>
                                    <rect x="7" y="8" width="4" height="9" rx="1"/>
                                </svg>
                                <span class="side-menu__label">Category</span>
                            </a>
                        </li>
                        <!-- End::slide -->


                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ route('books.index') }}" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-library-icon lucide-library ml-2 side-menu__icon">
                                    <path d="m16 6 4 14"/>
                                    <path d="M12 6v14"/>
                                    <path d="M8 8v12"/>
                                    <path d="M4 4v16"/>
                                </svg>
                                <span class="side-menu__label">Books</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user mr-2 side-menu__icon">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/></svg>
                                <span class="side-menu__label">Students</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gpu-icon lucide-gpu mlr-2 side-menu__icon">
                                    <path d="M2 21V3"/>
                                    <path d="M2 5h18a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2.26"/>
                                    <path d="M7 17v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3"/>
                                    <circle cx="16" cy="11" r="2"/>
                                    <circle cx="8" cy="11" r="2"/>
                                </svg>
                                <span class="side-menu__label">Transact Management</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-japanese-yen-icon lucide-japanese-yen ml-2 side-menu__icon">
                                    <path d="M12 9.5V21m0-11.5L6 3m6 6.5L18 3"/>
                                    <path d="M6 15h12"/>
                                    <path d="M6 11h12"/>
                                </svg>
                                <span class="side-menu__label">Fine Management</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history-icon lucide-history ml-2 side-menu__icon">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                                    <path d="M3 3v5h5"/>
                                    <path d="M12 7v5l4 2"/>
                                </svg>
                                <span class="side-menu__label">Reporting & History</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>