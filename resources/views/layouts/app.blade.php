<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Header start -->
    @include('partials.header')
    <!-- Header end -->

    {{-- Page Content --}}
    <div class="pagecontent">
        @yield('content')
    </div>

    <!-- Footer part start -->
    @include('partials.footer')
    <!-- Footer part end -->

    <!-- Modal part -->
    <div id="trainingModal" class="modal-close-imp">
        <div class="des-info-popup">
            <div class="comparer-popup">
                <div class="cmn_title">
                    <div class="bg-green">
                        <h3>Modifier le profil</h3>
                    </div>
                </div>
                <span id="closeIcon">
                    <img src="{{ asset('assets/images/close-white.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                </span>
                <div class="modal-content">
                    <div class="modal-lists">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                <button class="close-list">
                                    <img src="{{ asset('assets/images/close-black.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                                </button>
                            </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                <button class="close-list">
                                    <img src="{{ asset('assets/images/close-black.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                                </button>
                            </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                <button class="close-list">
                                    <img src="{{ asset('assets/images/close-black.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons">
                        <div class="btn-primary">
                            <button id="openModalBtn">Comparer les formations</button>
                        </div>
                        <div class="btn-outline" id="openAlertModal"><a href="#">Fermer</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tableListModal" class="table-modal">
        <div class="tableModal">
            <div class="inner-div">
                <div class="cmn_title">
                    <div class="bg-green">
                        <h3>Tableau Comparatif pour Responsable Formation</h3>
                    </div>
                </div>
                <button id="closeIcon2">
                    <img src="{{ asset('assets/images/close-oreng.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                </button>

                <form action>
                    <div class="table">
                        <div class="table-wrapper">
                            <table id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Critères & Détails</th>
                                        <th>Formation Imhotep Training</th>
                                        <th>Formation Imhotep Training</th>
                                        <th>Formation Imhotep Training</th>
                                        <th>Notes et commentaires</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0. Titre de la formation</td>
                                        <td>sdgfggdf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>1. Description & Objectifs</td>
                                        <td>sdgfggdf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>sdgfggdf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Objectifs pédagogiques</td>
                                        <td>sdgfggdf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>2. Adéquation cible</td>
                                        <td>Débutant</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Clientèle visée</td>
                                        <td>sdgfggdf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Niveau requis</td>
                                        <td>dsfsdfdsf</td>
                                        <td>abcd</td>
                                        <td>abcd</td>
                                        <td><input type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="modal-btn">
                        <div class="buttons">
                            <div class="btn-primary"><button type="submit">Réinitialiser</button></div>
                            <div class="btn-outline"><a href="#">Télécharger le PDF</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="tableTableModal" class="table-modal">
        <div class="tableModal2">
            <div class="inner-div">
                <div class="cmn_title">
                    <div class="bg-green">
                        <h3>Grille d'analyse et d'évaluation</h3>
                    </div>
                </div>
                <button id="closeIcon3">
                    <img src="{{ asset('assets/images/close-oreng.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                </button>

                <div>
                    <div class="rules">
                        <ol>
                            <li>*Attribuez une note de 1 à 5 par critère (5 = excellent)*</li>
                            <li>* Affectez un pourcentage à chaque critère en veillant à ce que le total n'excède pas
                                100%*</li>
                        </ol>
                    </div>

                    <form action>
                        <div class="table">
                            <div class="table-wrapper">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Critères clés & Détails</th>
                                            <th>Définitions critères</th>
                                            <th class="input-number">Poids (%)</th>
                                            <th>Formation Imhotep <br> Training (Note/5)</th>
                                            <th>Formation Imhotep <br> Training (Note/5)</th>
                                            <th>Formation Imhotep <br> Training (Note/5)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Objectifs pédagogiques</td>
                                            <td>Des résultats mesurables</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Méthodes pédagogiques et format de diffusion</td>
                                            <td>Compatibilité/facilité opérationnelle</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Adéquation cible</td>
                                            <td>Pertinence par rapport au profil de l'employé</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Qualité du contenu</td>
                                            <td>Contenu transférable dans les tâches</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Expertise des formateurs</td>
                                            <td>Capacité de transfert de connaissances</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Rapport qualité/prix</td>
                                            <td>Alignement budgétaire</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>
                                        <tr>
                                            <td>Durée et flexibilité</td>
                                            <td>Impact de la disponibilité de l'équipe et maintien du service</td>
                                            <td><input type="number" placeholder="0"></td>
                                            <td><input type="text" placeholder="Formation A"></td>
                                            <td><input type="text" placeholder="Formation B"></td>
                                            <td><input type="text" placeholder="Imhotep Training"></td>
                                        </tr>

                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td class="total"><input type="number" name="" id=""
                                                    placeholder="Score A = Σ (Poids x Note)"></td>
                                            <td class="total"><input type="number" name="" id=""
                                                    placeholder="Score B = Σ (Poids x Note)"></td>
                                            <td class="total"><input type="number" name="" id=""
                                                    placeholder="Score C = Σ (Poids x Note)"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div>
                            <button class="common-btn">
                                <span class="text">Submit</span>
                                <span class="arr">
                                    <img src="{{ asset('assets/images/arr.svg') }}" alt="arrow" loading="lazy" fetchpriority="auto">
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="tableTableModal" class="table-modal">
        <div class="tableModal3">
            <div class="inner-div">
                <button id="closeIcon4">
                    <img src="{{ asset('assets/images/close-oreng.svg') }}" alt="cross" loading="lazy" fetchpriority="auto">
                </button>
                <div class="alert-img">
                    <img src="{{ asset('assets/images/alert-modal.webp') }}" alt="alert" height="103px" width="103px" loading="lazy"
                        fetchpriority="auto">
                </div>
                <h5>ATTENTION</h5>
                <h6>Vous êtes conscient de vouloir supprimer cette formation.</h6>
                <div class="alert-list">
                    <p>En cliquant sur Je valide vous risquez de :</p>
                    <ul>
                        <li>Supprimez la formation définitivement.</li>
                        <li>La formation sera pas disponible à tous les utilisateurs.</li>
                        <li>Tous statisitiques seront dévinitivement perdues</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal part -->

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

    @yield('modalComponent')
    @include('layouts.scripts')
    @yield('customJS')
</body>
</html>

