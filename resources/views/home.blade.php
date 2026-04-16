@extends('layouts.app')

@section('title', $title)
{{-- @section('page_title', $page_title) --}}

@section('content')

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
                                    <img src="{{ asset('assets/images/arr.svg') }}" alt="arrow" loading="lazy" fetchpriority="auto">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="right-img">
                        <img src="{{ asset('assets/images/banner.webp') }}" alt="banner image" width="460px" height="545px" loading="lazy"
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
                                    <img src="{{ asset('assets/images/down-arrow.webp') }}" height="8px" width="8px" alt="arrow"
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
                                    <img src="{{ asset('assets/images/down-arrow.webp') }}" height="8px" width="8px" alt="arrow"
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
                                    <img src="{{ asset('assets/images/down-arrow.webp') }}" height="8px" width="8px" alt="arrow"
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
                                    <img src="{{ asset('assets/images/down-arrow.webp') }}" height="8px" width="8px" alt="arrow"
                                        loading="lazy" fetchpriority="auto" class="arrow">
                                </span>
                            </div>

                            <div class="dropdow-circle dropdow-wrapper">
                                <div>
                                    <button type="submit" class="common-btn">
                                        <span class="text">Recherche</span>
                                        <span class="arr">
                                            <img src="{{ asset('assets/images/arr.svg') }}" alt="arrow" loading="lazy" fetchpriority="auto">
                                        </span>
                                    </button>
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
    <section class="topFormations_sec">
        <div class="container">
            <div class="cmn_title">
                <h3>Top Formations</h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="{{ asset('assets/images/card1.svg') }}" alt="card logo" height="40px" width="40px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <p class="underline-text">
                                Ouvrir le calendrier des formations
                            </p>

                            <div class="buttons">
                                <div class="btn-primary"><button type="submit">Comparer</button></div>
                                <div class="btn-outline"><a href="#">Consulter</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="formation-card">

                        <div class="card-top">
                            <div class="logo-box">
                                <img src="{{ asset('assets/images/card2.svg') }}" alt="card logo" height="16px" width="79px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
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
                                <img src="{{ asset('assets/images/card3.svg') }}" alt="card logo" height="26px" width="39px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
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
                                <img src="{{ asset('assets/images/card4.svg') }}" alt="card logo" height="41px" width="56px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
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
                                <img src="{{ asset('assets/images/card5.svg') }}" alt="card logo" height="16px" width="84px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
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
                                <img src="{{ asset('assets/images/card6.svg') }}" alt="card logo" height="19px" width="71px" loading="lazy"
                                    fetchpriority="auto">
                            </div>

                            <div class="top-right">
                                <div class="love">
                                    <button class="wishlist">
                                        <i class="fa-solid fa-heart" style="color: rgb(255, 255, 255);"></i>
                                    </button>
                                </div>
                                <div class="badge">123 F CFA</div>
                                <div class="stars">
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                                    <i class="fa-regular fa-star" style="color: rgb(255, 212, 59);"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h4>

                            <div class="info">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/calender.svg') }}" alt="calender" height="17px" width="18px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>12-Février-2025</span>
                                </div>
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/clock.svg') }}" alt="clock" height="19px" width="19px" loading="lazy"
                                        fetchpriority="auto">
                                    <span>23 Jours | 232 Heures</span>
                                </div>
                            </div>

                            <div class="location">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/location.svg') }}" alt="location" height="19px" width="14px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Abidjan</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
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
                        <img src="{{ asset('assets/images/s1.svg') }}" alt="Companies logo" height="16px" width="134px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s2.svg') }}" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s3.svg') }}" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s4.svg') }}" alt="Companies logo" height="26px" width="139px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s5.svg') }}" alt="Companies logo" height="26px" width="144px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s6.svg') }}" alt="Companies logo" height="26px" width="136px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s1.svg') }}" alt="Companies logo" height="16px" width="134px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s2.svg') }}" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s3.svg') }}" alt="Companies logo" height="26px" width="111px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s4.svg') }}" alt="Companies logo" height="26px" width="139px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s5.svg') }}" alt="Companies logo" height="26px" width="144px" loading="lazy"
                            fetchpriority="auto">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/s6.svg') }}" alt="Companies logo" height="26px" width="136px" loading="lazy"
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
                            <img src="{{ asset('assets/images/service1.svg') }}" alt="card image" height="148px" width="147px" loading="lazy"
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
                            <img src="{{ asset('assets/images/service2.svg') }}" alt="card image" height="148px" width="148px" loading="lazy"
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
                            <img src="{{ asset('assets/images/statistique1.svg') }}" alt="statistique" height="42px" width="38px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="10">10</div>
                        <div class="text">Compte particular</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="{{ asset('assets/images/statistique2.svg') }}" alt="statistique" height="42px" width="43px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="35">35</div>
                        <div class="text">Compte entreprise de formation</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="{{ asset('assets/images/statistique3.svg') }}" alt="statistique" height="42px" width="35px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="44">44</div>
                        <div class="text">Bénéficiaires</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="{{ asset('assets/images/statistique4.svg') }}" alt="statistique" height="42px" width="44px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="9">9</div>
                        <div class="text">Entreprises</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="{{ asset('assets/images/statistique5.svg') }}" alt="statistique" height="42px" width="41px"
                                loading="lazy" fetchpriority="auto">
                        </div>
                        <div class="number counter" data-target="75">75</div>
                        <div class="text">Visiteurs du site</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="statistique-box">
                        <div class="circle">
                            <img src="{{ asset('assets/images/statistique6.svg') }}" alt="statistique" height="42px" width="42px"
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

@endsection


@section('customJS')
@endsection

