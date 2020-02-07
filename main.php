<main>
    <section id="qui_suis_je">
        <div class="row bandeau">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0;">
                <img src="img/backgroundaccueil.jpg" alt="bandeau" class="bandeau">
                <h1 class="titre_1">Présentation</h1>
            </div>
        </div>
        
        <div class="row presentation">
            <div class="col-sm-3 col-md-6 col-lg-4 mx-auto">
                <img src="img/photomoi.jpg" alt="developpeur web" class="photo">
                <button type="button" class="btn-message">
                Nouveaux Message de Cédric Pierrard <span class="badge badge-light">1</span>
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <aside class="autobio">
                    <p style="padding: 3vh;">
                    Une soif de connaissance qui m'a mené dans divers secteurs d'activités riches d'expériences.
                    Mais qui ne m'ont malheuresment pas permis d'être épanoui professionnellement, j'ai pris la décision de me reconvertir
                     au milieu du web.
                     Un secteur qui recrute et dans lequel j'ai grandi et vu l'évolution, 
                     L'organisme WebForce3 m'a permis d'intégrer un cursus intensif de 
                     602 heures en présentiel suivi d'un stage en entreprises de 6 semaines minimum que j'ai effectué au service numérique
                      de la mairie de Voisins-le-Bretonneux avec la possibilité d'obtenir un titre professionnel RNCP
                       de Développeur Web et Web Mobile a l'issue de celui-ci.
                       </p>
                </aside>
                <small class="lu">Lu le <?php setlocale(LC_TIME, 'fra_fra'); echo strftime('%A %d %B %Y, %H:%M') ; ?></small>
            </div>
        </div>
    </section>

    <section id="competences">
        <div class="row bandeau2">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0;">
                <img src="img/competences.jpg" alt="bandeau" class="bandeau">
                <h1 class="titre_1">Mes Compétences</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6" style="display:flex; justify-content: space-between;">
                <span>
                    <h2 class="display-4 text-dark">Front End</h2>
                    <img src="img/HTML5.png" alt="logo html" class="logoFront">
                    <img src="img/CSS.png" alt="logo css" class="logoFront">
                    <img src="img/JS.png" alt="logo javascript" class="logoFront">
                </span>
                <span>
                    <h2 class="display-4 text-dark">Back End</h2>
                    <img src="img/php.png" alt="logo php" class="logoBack">
                    <img src="img/mysql.png" alt="logo mysql" class="logoBack">
                    <img src="img/symfony.png" alt="logo symfony" class="logoBack">
                </span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                <h3 class="display-4">Dominance Compétences <br> Front / <span style="color:rgb(143, 50, 205);">Back</span></h3>
                <div class="pie" style="animation-delay: -60s; margin-bottom:2vh;">
                <svg viewBox="0 0 32 32" style=>
                    <circle r="16" cx="16" cy="16" />
                </svg>
                </div>
            </div>
        </div>
    </section>

    <section id="projets">
        <div class="row bandeau2">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0;">
                <img src="img/realisation.jfif" alt="bandeau" class="bandeau">
                <h1 class="titre_1">Mes réalisations</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <h3 class="display-4" style="text-align: center;">Maquette Front</h3>
                <div class="projets">
                    <div class = "row justify-content-center">
                        <a href = "projet/boxeshop/index.html" target="_blank" class = "column col-xs-6 col-md-6" id = "caption">
                            <span class = "text">
                                <h1>Boutique équipement Boxe</h1>
                            </span>
                            <img src ="projet/boxeshop/img/logo.png">
                        </a>
                        <a href = "projet/salem/index.html" target="_blank" class = "column col-xs-6 col-md-6" id = "caption">
                            <span class = "text">
                                <h1>Agence Web </h1>
                            </span>
                            <img src ="projet/salem/img/logo.jpg">
                        </a>

                        <a href = "projet/voyage/index.html" target="_blank" class = "column col-xs-6 col-md-6" id = "caption">
                            <span class = "text">
                                <h1>Agence de Voyage</h1>
                            </span>
                            <img src ="projet/voyage/images/Projet  Mise en place-main.jpg">
                        </a>

                        <a href = "projet/location/index.html" target="_blank" class = "column col-xs-6 col-md-6" id = "caption">
                            <span class = "text">
                                <h1>Agence Location</h1>
                            </span>
                            <img src ="projet/location/img/vehicule4.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row justify-content-center" style="text-align: center;">
                <div class="col-sm-6 col-md-6 col-lg-6">
                <h3 class="display-4">Développement Back</h3>
                </div>
            </div>
    </section>
</main>