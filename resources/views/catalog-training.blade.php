@extends('layouts.app')

@section('title', $title)
{{-- @section('page_title', $page_title) --}}

@section('content')

    <section class="TraingCatalog_sec">
        <div class="container">
            <div class="top-traingCatalog">
                <div class="left-content">
                    <div class="cmn_title">
                        <h3>Catalogue des formations</h3>
                    </div>
                    <p>Recherchez et trouvez la formation parfaite qui répondra pleinement à toutes vos attentes</p>
                </div>
                <div class="filter-container">

                    <!-- <div>
                            <label class="form-label">Niveau</label>
                            <select class="form-select">
                                <option selected>Niveau</option>
                                <option>Beginner</option>
                                <option>Intermediate</option>
                                <option>Advanced</option>
                            </select>
                        </div>

                        <div>
                            <label class="form-label">Langage</label>
                            <select class="form-select">
                                <option selected>Anglais</option>
                                <option>French</option>
                                <option>Spanish</option>
                            </select>
                        </div> -->

                    <div class="range-container">
                        <label class="form-label">Prix</label>
                        <input type="range" class="form-range" min="0" max="5000" value="0">
                        <div class="range-values">
                            <span>0</span>
                            <span>5000</span>
                        </div>
                    </div>

                    <button class="filter-btn">
                        <i class="fa-solid fa-filter" style="color: rgb(255, 255, 255);"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="topFormations_sec">
        <div class="container">
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

@endsection


@section('customJS')
@endsection



