<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Connexion Formation</title>
    <!-- FAVICON LINKS -->
    <link rel="icon" href="{{ asset('asset/images/favicon.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/homeBody.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" type="text/css">
</head>

<body>
    <!-- Header start -->
    <header id="header" class="main_header">
        <div class="container">
            <div class="row">
                <div class="nav_bar_top">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('asset/images/logo.svg') }}" alt="logo" width="256px" height="64px" loading="lazy"
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
                                        <img src="images/log-arr.svg" alt="arrow" height="9px" width="18px"
                                            loading="lazy" fetchpriority="auto">
                                    </div>
                                    <ul class="login-menu-mobile">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Log In</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bg-circle small-hide"><a href="#"><img src="images/facebook.svg" alt="Instagram Image" height="17px"
                                        width="9px" loading="lazy" fetchpriority="auto"></a></li>
                            <li class="bg-circle small-hide"><a href="#"><img src="images/insta.svg" alt="Instagram Image" height="17px" width="17px"
                                        loading="lazy" fetchpriority="auto"></a></li>
                            <li class="bg-circle small-hide"><a href="#"><img src="images/tictok.svg" alt="Instagram Image" height="17px"
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
                                            <img src="images/logo.svg" alt="logo" width="256px" height="64px"
                                                loading="lazy" fetchpriority="high">
                                        </a>
                                    </div>
                                </li>
                                <li><a href="index.html">Accueil</a></li>
                                <li>
                                    <div class="drop-down">
                                        <a href="#" class="dropdownList-toggle">
                                            <span>Catalogue</span>
                                            <img src="images/down-arrow.webp" class="arrow" height="8px" width="10px" />
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
                                            <img src="images/log-arr.svg" alt="arrow" height="9px" width="18px"
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
    <!-- Header end -->

    <!-- Banner start -->
    <section class="home-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="banner-text">
                        <h1> Développez les compétences de vos équipes, c’est facile sur</h1>
                        <h2>
                            <span class="green">Connexion</span> <span class="orenge">Formation</span>.ci
                        </h2>

                        <p>Trouvez en un seul clic des formations professionnelles adaptées à vos besoins.</p>
                        <div>
                            <a href="#" class="common-btn">
                                <span class="text">Know More</span>
                                <span class="arr">
                                    <img src="images/arr.svg" alt="arrow" loading="lazy" fetchpriority="auto">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="right-img">
                        <img src="images/banner.webp" alt="banner image" width="460px" height="545px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner part end -->

    <!-- form part start -->
    <section class="form_sec">
        <div class="container">
            <div class="search_form">
                <h4>Lorem ipsum dolor sit amet</h4>
                <form action="">
                    <div class="dropdow-group">
                        <div class="dropdow-row dropdow-top">
                            <input class="dropdow-input" type="text" placeholder="Tapez vos mot(s) clé(s) ..."
                                aria-label="Votre nom">

                            <div class="dropdow-circle dropdow-wrapper">
                                <select class="dropdow-select" aria-label="Niveau de formation principal">
                                    <option value="" disabled selected>Vous êtes à la recherche de ?</option>
                                    <option value="Baccalauréat">Baccalauréat</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                                <span class="circle-icon" aria-hidden="true">
                                    <img src="images/down-arrow.webp" height="8px" width="8px" alt="arrow"
                                        loading="lazy" fetchpriority="auto" class="arrow">
                                </span>
                            </div>
                        </div>

                        <div class="dropdow-bottom dropdow-wrapper dropdow-row">
                            <div class="dropdow-circle dropdow-wrapper">
                                <select class="dropdow-select" aria-label="Niveau de formation">
                                    <option value="" disabled selected>Niveau de formation</option>
                                    <option value="Baccalauréat">Baccalauréat</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                                <span class="circle-icon circle-icon1" aria-hidden="true">
                                    <img src="images/down-arrow.webp" height="8px" width="8px" alt="arrow"
                                        loading="lazy" fetchpriority="auto" class="arrow">
                                </span>
                            </div>

                            <div class="dropdow-circle dropdow-wrapper">
                                <select class="dropdow-select" aria-label="Lieu">
                                    <option value="" disabled selected>Lieu</option>
                                    <option value="Baccalauréat">Baccalauréat</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                                <span class="circle-icon circle-icon1" aria-hidden="true">
                                    <img src="images/down-arrow.webp" height="8px" width="8px" alt="arrow"
                                        loading="lazy" fetchpriority="auto" class="arrow">
                                </span>
                            </div>

                            <div class="dropdow-circle dropdow-wrapper">
                                <select class="dropdow-select" aria-label="Type d'activité">
                                    <option value="" disabled selected>Type d'activité</option>
                                    <option value="Baccalauréat">Baccalauréat</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                                <span class="circle-icon" aria-hidden="true">
                                    <img src="images/down-arrow.webp" height="8px" width="8px" alt="arrow"
                                        loading="lazy" fetchpriority="auto" class="arrow">
                                </span>
                            </div>

                            <div class="dropdow-circle dropdow-wrapper">
                                <div>
                                    <a href="#" class="common-btn">
                                        <span class="text">Recherche</span>
                                        <span class="arr">
                                            <img src="images/arr.svg" alt="arrow" loading="lazy" fetchpriority="auto">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- form part end -->

    <!-- Top Formations part start -->
    <section class="formations_sec">
        <div class="container">
            <div class="cmn_title">
                <h3>Top Formations</h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card1.svg" alt="card logo" height="40px" width="40px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#">Comparer</a></div>
                                <div class="btn-outline"><a href="#">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card2.svg" alt="card logo" height="16px" width="79px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
                                <div class="btn-outline"><a href="#" class="btn-outline">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card3.svg" alt="card logo" height="26px" width="39px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
                                <div class="btn-outline"><a href="#" class="btn-outline">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card4.svg" alt="card logo" height="41px" width="56px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
                                <div class="btn-outline"><a href="#" class="btn-outline">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card5.svg" alt="card logo" height="16px" width="84px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
                                <div class="btn-outline"><a href="#" class="btn-outline">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="images/card6.svg" alt="card logo" height="19px" width="71px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <div class="wishlist">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C7.16375 0 0 7.16375 0 16C0 24.8363 7.16375 32 16 32C24.8363 32 32 24.8363 32 16C32 7.16375 24.8369 0 16 0ZM16 25.4263L14.4825 24.3487C12.9606 23.205 12.0175 22.4881 10.8206 21.3988C9.67562 20.3556 8.39062 19.0744 7.60313 17.5387C7.60313 17.5387 7.20938 16.7006 7.03 15.9838C6.91383 15.4749 6.86591 14.9528 6.8875 14.4312C7.035 11.4937 9.59688 8.81375 12.2475 8.66063C12.8669 8.62997 13.4848 8.74626 14.0506 9C14.3874 9.15193 14.704 9.34507 14.9931 9.575L16 10.4375L17.0069 9.58062C17.7956 8.95562 18.7294 8.61562 19.7525 8.66375C22.4031 8.81687 24.965 11.4956 25.1125 14.4344C25.1341 14.9559 25.0862 15.478 24.97 15.9869C24.97 15.9869 24.74 16.9244 24.3969 17.5419C23.6094 19.0775 22.3244 20.3587 21.1794 21.4019C20.7725 21.7712 20.4012 22.0944 20.0269 22.4056C19.295 23.0138 18.5456 23.5781 17.5175 24.3512L16 25.4263Z"
                                                fill="#4D8C57" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars"><img src="images/star.webp" alt="star" height="14px" width="83px"
                                        loading="lazy" fetchpriority="auto"></div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="images/calender.svg" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="images/clock.svg" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="images/location.svg" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="images/training.svg" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
                                <div class="btn-outline"><a href="#" class="btn-outline">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Formations part start -->

    <!-- Companies with us part start -->
    <section class="companiesWithUs-sec">
        <div class="container">
            <div class="companie">
                <p>35+ Companies with us</p>
            </div>
            <div class="scroll-wrapper">
                <div class="scroll-content">
                    <div>
                        <img src="images/s1.svg" alt="Companies logo" height="16px" width="134px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s2.svg" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s3.svg" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s4.svg" alt="Companies logo" height="26px" width="139px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s5.svg" alt="Companies logo" height="26px" width="144px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s6.svg" alt="Companies logo" height="26px" width="136px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s1.svg" alt="Companies logo" height="16px" width="134px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s2.svg" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s3.svg" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s4.svg" alt="Companies logo" height="26px" width="139px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s5.svg" alt="Companies logo" height="26px" width="144px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="images/s6.svg" alt="Companies logo" height="26px" width="136px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Companies with us part end -->

    <!-- Nos Services part start -->
    <section class="service-sec">
        <div class="container">
            <div class="cmn_title">
                <h3>Nos Services</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div>
                            <img src="images/service1.svg" alt="card image" height="148px" width="147px" loading="lazy"
                                fetchpriority="auto">
                        </div>
                        <div class="cmn_title">
                            <P><a href="#">Offres pour les particuliers</a></P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div>
                            <img src="images/service2.svg" alt="card image" height="148px" width="148px" loading="lazy"
                                fetchpriority="auto">
                        </div>
                        <div class="cmn_title">
                            <p><a href="#">Offres pour les organismes et cabinets de formation</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div>
                            <img src="{{ asset('assets/images/service3.png') }}" alt="card image" height="148px" width="158px" loading="lazy"
                                fetchpriority="auto">
                        </div>
                        <div class="cmn_title">
                            <p><a href="#">Offres pour les entreprises privées et publiques</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Nos Services part end -->

    <!-- Statistiques part start -->
    <section class="statistiques-sec">
        <div class="container">
            <div class="cmn_title">
                <h3>Statistiques</h3>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique1.svg" alt="statistique" height="42px" width="38px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="10">10</div>
                        <div class="text">Compte particular</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique2.svg" alt="statistique" height="42px" width="43px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="35">35</div>
                        <div class="text">Compte entreprise de formation</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique3.svg" alt="statistique" height="42px" width="35px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="44">44</div>
                        <div class="text">Bénéficiaires</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique4.svg" alt="statistique" height="42px" width="44px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="9">9</div>
                        <div class="text">Entreprises</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique5.svg" alt="statistique" height="42px" width="41px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="75">75</div>
                        <div class="text">Visiteurs du site</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="images/statistique6.svg" alt="statistique" height="42px" width="42px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="44">44</div>
                        <div class="text">Partners</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Statistiques part end -->

    <!-- Footer part start -->
    <footer class="footer-shell">
        <div class="container-xl">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <aside class="footer__aside">
                        <a class="footer__brand" href="#">
                            <img src="images/logo.svg" alt="logo" width="200px" height="50px" loading="lazy"
                                fetchpriority="auto">
                        </a>

                        <h2 class="footer__contact-title">Contact Us</h2>
                        <ul class="footer__contact-list">
                            <li class="footer__contact-item">
                                <span class="footer__icon-wrap" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M7.3 4.8C7.7 4.4 8.2 4.3 8.7 4.5L11 5.5C11.6 5.8 11.9 6.5 11.7 7.1L11.1 9.2C11 9.6 11.1 10 11.4 10.3L13.7 12.6C14 12.9 14.4 13 14.8 12.9L16.9 12.3C17.5 12.1 18.2 12.4 18.5 13L19.5 15.3C19.7 15.8 19.6 16.3 19.2 16.7L17.8 18.1C17.2 18.7 16.3 19 15.5 18.8C12.9 18.2 10.4 16.8 8.3 14.7C6.2 12.6 4.8 10.1 4.2 7.5C4 6.7 4.3 5.8 4.9 5.2L7.3 4.8Z"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div>
                                    <span class="footer__label">Call Us</span>
                                    <a href="tel:+1 438 868 8209" class="footer__value">+1 438 868 8209</a>
                                </div>
                            </li>

                            <li class="footer__contact-item">
                                <span class="footer__icon-wrap" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M5 7.5C5 6.67 5.67 6 6.5 6H17.5C18.33 6 19 6.67 19 7.5V16.5C19 17.33 18.33 18 17.5 18H6.5C5.67 18 5 17.33 5 16.5V7.5Z"
                                            stroke="currentColor" stroke-width="1.8" />
                                        <path d="M6 8L12 12.5L18 8" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div>
                                    <span class="footer__label">Email</span>
                                    <a href="mailto:imhoteptechnologies@gmail.com"
                                        class="footer__value">imhoteptechnologies@gmail.com</a>
                                </div>
                            </li>

                            <li class="footer__contact-item">
                                <span class="footer__icon-wrap" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M12 20C15.5 15.8 17.25 12.75 17.25 10.84C17.25 7.95 14.89 5.6 12 5.6C9.11 5.6 6.75 7.95 6.75 10.84C6.75 12.75 8.5 15.8 12 20Z"
                                            stroke="currentColor" stroke-width="1.8" />
                                        <circle cx="12" cy="10.8" r="1.8" stroke="currentColor" stroke-width="1.6" />
                                    </svg>
                                </span>
                                <div>
                                    <span class="footer__label">Office Address</span>
                                    <p class="footer__value">Deux plateaux, derrière Sococé, Cocody, Abidjan</p>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="footer__main">
                        <div class="footer__top">
                            <p class="footer__headline">
                                Découvrez nos offres exclusives
                                et accédez à une multitude de
                                services regroupés.
                            </p>

                            <form class="footer__subscribe">
                                <input type="email" placeholder="Enter email" aria-label="Enter email">
                                <button class="footer__send" type="submit" aria-label="Send">
                                    <img src="images/mail-arr.svg" alt="mail arrow" width="15px" height="14px"
                                        loading="lazy" fetchpriority="auto">
                                </button>
                            </form>
                        </div>

                        <div class="footer__links">
                            <section class="footer__group">
                                <h3 class="footer__group-title">Pages</h3>
                                <div class="footer__double-list">
                                    <ul>
                                        <li><a href="#">Accueil</a></li>
                                        <li><a href="#">Catalogue</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </section>

                            <section class="footer__group">
                                <h3 class="footer__group-title">Autres</h3>
                                <ul>
                                    <li><a href="#">A venir ..</a></li>
                                </ul>
                            </section>

                            <section class="footer__group">
                                <h3 class="footer__group-title">Suivez-nous</h3>
                                <ul class="footer__link_page">
                                    <li><a href="#"><img src="images/facebook.svg" alt="Instagram Image" height="12"
                                                width="6" loading="lazy" fetchpriority="auto"></a></li>
                                    <li><a href="#"><img src="images/insta.svg" alt="Instagram Image" height="12"
                                                width="12" loading="lazy" fetchpriority="auto"></a></li>
                                    <li><a href="#"><img src="images/tictok.svg" alt="Instagram Image" height="12"
                                                width="10" loading="lazy" fetchpriority="auto"></a></li>
                                </ul>
                            </section>
                        </div>

                        <div class="footer__copyright">All rights Reserved © <a href="#">imhotep technologies</a>, 2025
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer part end -->

    <!-- back to top start -->
    <div class="back_to_top">
        <a id="back-to-top" style="display: inline;">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512"
                xml:space="preserve" class="">
                <g>
                    <path
                        d="M16.71 15.29a1 1 0 0 0-1.42 0l-10 10a1 1 0 0 0 1.42 1.42l9.29-9.3 9.29 9.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"
                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                    <path
                        d="M6.71 16.71 16 7.41l9.29 9.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-10-10a1 1 0 0 0-1.42 0l-10 10a1 1 0 0 0 1.42 1.42z"
                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                </g>
            </svg>
        </a>
    </div>
    <!-- back to top start -->

    <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/fancybox.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/edit-js.js') }}" defer></script>
</body>

</html>
