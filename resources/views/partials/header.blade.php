<header id="header" class="main_header">
    <div class="container">
        <div class="row">
            <div class="nav_bar_top">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
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
                        <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/facebook.svg') }}" alt="Instagram Image" height="17px"
                                    width="9px" loading="lazy" fetchpriority="auto"></a></li>
                        <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/insta.svg') }}" alt="Instagram Image" height="17px" width="17px"
                                    loading="lazy" fetchpriority="auto"></a></li>
                        <li class="bg-circle small-hide"><a href="#"><img src="{{ asset('assets/images/tictok.svg') }}" alt="Instagram Image" height="17px"
                                    width="15px" loading="lazy" fetchpriority="auto"></a></li>
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
                        <span class="close-menu">&times;</span>
                    </div>
                    <nav class="nav_list">
                        <ul class="header-list">
                            <li>
                                <div class="mobile-logo">
                                    <a href="index.html" class="nav-logo">
                                        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" width="256px" height="64px"
                                            loading="lazy" fetchpriority="high">
                                    </a>
                                </div>
                            </li>
                            <li><a href="index.html">Accueil</a></li>
                            <li>
                                <div class="drop-down">
                                    <a href="#" class="dropdownList-toggle">
                                        <span>Catalogue</span>
                                        <img src="{{ asset('assets/images/down-arrow.webp') }}" class="arrow" height="8px" width="10px" />
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Catalogue 1</a></li>
                                        <li><a href="#">Catalogue 2</a></li>
                                        <li><a href="#">Catalogue 3</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="services.html">Services</span></a></li>
                            <li><a href="#">Évaluation de la formation</a></li>
                            <li><a href="actualitésRH.html">Actualités RH</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="#">0 Formations a comparer </a></li>
                            <li><a href="#">Grille d'analyse</a></li>
                            <li>
                                <div class="login_btn">
                                    <div class="login-toggle">
                                        <span class="profile-icon">login</span>
                                        <img src="{{ asset('assets/images/log-arr.svg') }}" alt="arrow" height="9px" width="18px"
                                            loading="lazy" fetchpriority="auto">
                                    </div>
                                    <ul class="login-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Log In</a></li>
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
