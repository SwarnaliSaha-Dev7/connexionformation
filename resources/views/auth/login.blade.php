@extends('layouts.app')

@section('title', $title)
{{-- @section('page_title', $page_title) --}}

@section('content')

    <section class="login_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-box">
                        <h5>Connexion</h5>
                        <form action>
                            <div class="input-group">
                                <input type="text" placeholder="Adresse courriel">
                                <span>
                                    <img src="{{ asset('assets/images/profile.svg') }}" alt="icon" width="18px" height="18px" loading="lazy"
                                        fetchpriority="auto">
                                </span>
                            </div>

                            <div class="input-group">
                                <input type="password" id="password" placeholder="Mot de passe">

                                <span id="togglePassword">
                                    <img src="{{ asset('assets/images/eye.svg') }}" id="eyeIcon" alt="icon" width="20px" height="14px"
                                        loading="lazy" fetchpriority="auto">
                                </span>
                            </div>
                            <div>
                                <div class="btn-green"><button>Connexion</button></div>
                            </div>

                            <p>Mot de passe perdu?</p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="plan-box">
                        <div class="cmn_title">
                            <h3>New on TRAINING CONNECTION</h3>
                        </div>
                        <div class="btn-green"><a href="#">Create your free account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('customJS')
@endsection

