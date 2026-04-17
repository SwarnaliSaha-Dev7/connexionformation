@extends('layouts.app')

@section('title', $title)
{{-- @section('page_title', $page_title) --}}

@section('content')

    <section class="intershipCatalog_sec">
        <div class="container">
            <div class="left-content">
                <div class="cmn_title">
                    <h3>Catalogue des emplois / stages</h3>
                </div>
                <p>Recherchez et trouvez rapidement le stage ou l'emploi idéal qui correspond à vos ambitions</p>
            </div>
        </div>
    </section>

    <section class="topFormations_sec intership_sec">
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
                                <div class="badge">Stage</div>
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

                            <div class="card-bottom">
                                <div class="training">
                                    <div class="info-inner">
                                        <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                            loading="lazy" fetchpriority="auto">
                                        <span>Imhotep Training</span>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <div class="btn-primary"><button type="submit">Comparer</button></div>
                                </div>
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
                                <div class="badge">Stage</div>
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
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
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
                                <div class="badge">Stage</div>
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
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
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
                                <div class="badge">Stage</div>
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
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
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
                                <div class="badge">Stage</div>
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
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
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
                                <div class="badge">Stage</div>
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
                        </div>

                        <div class="card-bottom">
                            <div class="training">
                                <div class="info-inner">
                                    <img src="{{ asset('assets/images/training.svg') }}" alt="location" height="22px" width="22px"
                                        loading="lazy" fetchpriority="auto">
                                    <span>Imhotep Training</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="btn-primary"><a href="#" class="btn-primary">Comparer</a></div>
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




