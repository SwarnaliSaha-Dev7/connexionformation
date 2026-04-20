    <header id="header" class="main_header">
        <div class="container">
            <div class="row">
                <div class="nav_bar_top">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('homePage') }}">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" width="256px" height="64px" loading="lazy"
                                fetchpriority="high">
                        </a>
                    </div>

                    <!-- Nav -->
                    <div class="nav-links-icon">
                        <ul>
                            <li>
                                <div class="login_btn_mobile">
                                    <div class="login-toggle-mobile">
                                        <span class="profile-icon">login</span>
                                        <img src="{{ asset('assets/images/log-arr.svg') }}" alt="arrow" height="9px" width="18px"
                                            loading="lazy" fetchpriority="auto">
                                    </div>
                                    <ul class="login-menu-mobile">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Log In</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/facebook.svg') }}"
                                        alt="Instagram Image" height="17px" width="9px" loading="lazy"
                                        fetchpriority="auto"></a></li>
                            <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/insta.svg') }}"
                                        alt="Instagram Image" height="17px" width="17px" loading="lazy"
                                        fetchpriority="auto"></a></li>
                            <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/tictok.svg') }}"
                                        alt="Instagram Image" height="17px" width="15px" loading="lazy"
                                        fetchpriority="auto"></a></li>
                            <li class="bg-circle">
                                <span class="toggle-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="#294342" fill-rule="evenodd"
                                            d="M20.75 7a.75.75 0 0 1-.75.75H4a.75.75 0 0 1 0-1.5h16a.75.75 0 0 1 .75.75m0 5a.75.75 0 0 1-.75.75H4a.75.75 0 0 1 0-1.5h16a.75.75 0 0 1 .75.75m0 5a.75.75 0 0 1-.75.75H4a.75.75 0 0 1 0-1.5h16a.75.75 0 0 1 .75.75"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="nav_bar_bottom">
                    <div>
                        <div class="mobile-header">
                            <span class="close-menu">
                                <img src="{{ asset('assets/images/close-black.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                            </span>
                        </div>
                        <nav class="nav_list">
                            <ul class="header-list">
                                <li>
                                    <div class="mobile-logo">
                                        <a href="{{ route('homePage') }}" class="nav-logo">
                                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" width="256px" height="64px"
                                                loading="lazy" fetchpriority="high">
                                        </a>
                                    </div>
                                </li>
                                <li><a href="{{ route('homePage') }}">Accueil</a></li>
                                <li>
                                    <div class="drop-down">
                                        <div class="dropdownList-toggle">
                                            <span>Catalogue</span>
                                            <img src="{{ asset('assets/images/down-arrow.webp') }}" class="arrow" height="8px" width="10px" />
                                        </div>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('training-catalog-listing') }}">Training Catalog</a></li>
                                            <li><a href="{{ route('internship-catalog-listing') }}">internship catalog</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('services') }}">Services</span></a></li>
                                <li><a href="evalution-de-la-formation.html">Évaluation de la formation</a></li>
                                <li><a href="actualitésRH.html">Actualités RH</a></li>
                                <li><a href="contactez-nous.html">Contactez-nous</a></li>
                                <li>
                                    <button id="opentrainingBtn">
                                        <span>0</span> Formations a comparer
                                    </button>
                                </li>
                                <li><button id="openThrModal">Grille d'analyse</button></li>
                                <li>
                                    <div class="login_btn">
                                        <div class="login-toggle">
                                            <span class="profile-icon">login</span>
                                            <img src="{{ asset('assets/images/log-arr.svg') }}" alt="arrow" height="9px" width="18px"
                                                loading="lazy" fetchpriority="auto">
                                        </div>
                                        <ul class="login-menu">
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="{{ route('login') }}">Log In</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>

