


<!-- Page Mes ateliers -->

<!-- homePage -->
<div data-scroll-section style="background-color: var(--blancBeige); z-index: 2">
    <div class="container-lg d-flex justify-content-between align-items-center">
        <div class="divHeaderMesAteliers">
            <h1 class="titreHeaderMesAteliers"><strong>LES ATELIERS LIVE GROUPÉ</strong></h1>
            <p style="color: var(--rose)" class="txtHomePageAtelier">Pour ceux qui n’ont pas le temps de prendre le temps</p>
            <p style="color: var(--gris)" class="txtHomePageAtelier" >Tu as une problématique particulière à un instant T et tu ne sais pas comment la résoudre RAPIDEMENT ?
                C’est le défi que je me suis lancée avec ces ateliers live.
            </p>
            <p class="txtHomePageAtelier">✅ Apprends, comprends, crée et vends</p>
            <button id="btn-nextAtelier" class="btn btn-rose">Je découvre les prochains ateliers</button>
            <button id="btn-nowAtelier" class="btn btn-rose">Je découvre les replay disponibles</button>
        </div>
        <div class="imgBase imgHeaderMesAteliers"></div>
    </div>
</div>

<!-- section2 carteDescription -->
<div data-scroll-section class="position-relative">
    <div class="container-lg containerCartesDescriptionAtelier">
        <div class="carteDescriptionAteliers">
            <div class="carteIcon">⏰</div>
            <h2 style="text-align: center; color: var(--beige)"><strong>Des ateliers de 2h-3h</strong></h2>
        </div>
        <div class="carteDescriptionAteliers">
            <div class="carteIcon">🗓</div>
            <h2 style="text-align: center; color: var(--beige)"><strong>Chaque mois</strong></h2>
        </div>
        <div class="carteDescriptionAteliers">
            <div class="carteIcon">💰</div>
            <h2 style="text-align: center; color: var(--beige)"><strong>À un prix tout doux</strong></h2>
        </div>
        <div class="carteDescriptionAteliers">
            <div class="carteIcon">💻</div>
            <h2 style="text-align: center; color: var(--beige)"><strong>Replay à vie</strong></h2>
        </div>
    </div>
    <div class="imgBase imgVagueDeco1MA"></div>
    <div class="imgBase imgVagueDeco2MA"></div>
</div>

<!-- section3 Atelier à venir -->
<div data-scroll-section class="sectionAteliersÀVenir">
    <div class="container-lg d-flex flex-column">
        <h2 style="color: var(--rose)"><strong>LES ATELIERS À VENIR</strong></h2>
        <div id="liste-elementsAteliersNext" style="background-color: var(--beige)" class="containerAteliers">

            <?php foreach ($ateliers as $atelier) {
                if ($atelier->getDispo()==1) { ?>

                    <div class="carteAtelier">
                        <h3 class="titreCarteAtelier"><strong><?= $atelier->getName() ?></strong></h3>
                        <p class="contentCarteAtelier"><?= $atelier->getContent() ?></p>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="d-flex align-items-center">
                                <span class="iconCarteAtelier">💰</span>
                                <p class="m-0 infosCarteAtelier"><?= $atelier->getPrice() ?>€</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="iconCarteAtelier">⏰</span>
                                <p class="m-0 infosCarteAtelier"><?= $atelier->getTime() ?>h</p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>

        </div>
        <div class="d-flex justify-content-end">
            <button style="color: var(--rose)" id="bouton-chargementNext" class="btn">Charger plus</button>
        </div>
    </div>
</div>

<!-- section4 Atelier Présent -->
<div data-scroll-section class="sectionAteliersPresents">
    <div class="container-lg d-flex flex-column">
        <h2 style="color: var(--rose); text-align: end"><strong>LES ATELIERS DISPONIBLES</strong></h2>
        <h2 style="color: var(--rose); text-align: end">EN REPLAY</h2>
        <div id="liste-elementsAteliersAct" style="background-color: var(--beige)" class="containerAteliers">

            <?php foreach ($ateliers as $atelier) {
                if ($atelier->getDispo()==2) { ?>

                    <a class="lienCarteAtelier" href="<?= $atelier->getUrl() ?>">
                        <div class="carteAtelier">
                            <h3 class="titreCarteAtelier"><strong><?= $atelier->getName() ?></strong></h3>
                            <p class="contentCarteAtelier"><?= $atelier->getContent() ?></p>
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="iconCarteAtelier">💰</span>
                                    <p class="m-0 infosCarteAtelier"><?= $atelier->getPrice() ?>€</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="iconCarteAtelier">⏰</span>
                                    <p class="m-0 infosCarteAtelier"><?= $atelier->getTime() ?>h</p>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php } ?>
            <?php } ?>

        </div>
        <div class="d-flex justify-content-end">
            <button style="color: var(--rose)" id="bouton-chargementAct" class="btn">Charger plus</button>
        </div>
    </div>
</div>


<!-- section5 avis -->
<div data-scroll-section class="pt-5 pb-5">
    <div class="container-lg d-flex flex-column align-items-center">
        <div class="text-center">
            <h2 style="color: var(--rose)">TÉMOIGNAGES</h2>
            <span style="color: var(--rose)"><strong class="titreInfoAvisMA">COMME PLUS DE 50 ENTREPRENEURS</strong></span>
            <p style="color: var(--gris)" class="txtInfoAvisMA">Vis l'expérience d'un atelier live avec moi <br>et développe l'automatisation pour scaler ton business</p>
        </div>
        <div style="height: 50vh" class="w-100 containerAvisAteliers mt-5 mb-5">
            <div class="imgBase carteAvisAteliers carteOne visible" style="background-image: url('img/avis1.jpg');"></div>
            <div class="imgBase carteAvisAteliers carteTwo visible" style="background-image: url('img/avis2.png');"></div>
            <div class="imgBase carteAvisAteliers carteThree visible" style="background-image: url('img/avis3.png');"></div>
        </div>
    </div>
</div>

<!-- section5 avis
<div data-scroll-section class="pt-5 pb-5">
    <div class="container-lg d-flex flex-column align-items-center">
        <div class="text-center">
            <h2 style="color: var(--rose)">TÉMOIGNAGES</h2>
            <span style="color: var(--rose)"><strong class="titreInfoAvisMA">COMME PLUS DE 50 ENTREPRENEURS</strong></span>
            <p style="color: var(--gris)" class="txtInfoAvisMA">Vis l'expérience d'un atelier live avec moi <br>et développe l'automatisation pour scaler ton business</p>
        </div>

        <div class="swiper">
             Additional required wrapper
            <div class="swiper-wrapper mt-5">
                 Slides

                <//?php foreach ($videos as $video) { ?>
                    <div class="swiper-slide">
                        <iframe width="100%" height="500px" src="<//?=  $video->getUrl()?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <//?php } ?>

            </div>
             If we need pagination
            <div class="swiper-pagination"></div>

             If we need navigation buttons
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


        </div>
    </div>
</div> -->

<!-- section6 Offre VIP -->
<div data-scroll-section class="pt-5 pb-5">
    <div class="container-lg d-flex flex-column align-items-center">

        <div class="text-center">
            <h2 style="color: var(--rose)"><strong>TON OFFRE V.I.P</strong></h2>
            <p style="color: var(--gris)" class="txtInfoVIPMA">Accède à tous les ateliers live et les replay</p>
            <span style="color: var(--rose)" class="txtInfoVIPMA">EN ILLIMITÉ</span>
        </div>

        <div class="containerOffreVIP">

            <!-- col Gauche -->
            <div class="containerCarteVIP">

                <div class="carteOffreVIP">
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>💻</span><strong>100% À DISTANCE</strong></h3>
                        <p class="txtCarteOffreVIP">Suis les séances depuis le bout du monde.</p>
                    </div>
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>🎥</span><strong>REPLAY</strong></h3>
                        <p class="txtCarteOffreVIP">De toutes les séances disponible à vie.</p>
                    </div>
                </div>

                <div class="carteOffreVIP">
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>🔒</span><strong>UN ESPACE MEMBRE</strong></h3>
                        <p class="txtCarteOffreVIP">Où retrouver toutes les videos, E-Book, Workbook ...</p>
                    </div>
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>📞</span><strong>CANAL DE COMMUNICATION</strong></h3>
                        <p class="txtCarteOffreVIP">Pour me rejoindre si tu as une question.</p>
                    </div>
                </div>
            </div>

            <!-- col center -->
            <div class="imgBase imgChatOrdi"></div>

            <!-- col Droite -->
            <div class="containerCarteVIP">
                <div class="carteOffreVIP carteOffreVIPPrice">
                    <h2 class="titreOffreBackground"><strong>TON ABONNEMENT</strong></h2>
                    <span class="priceAbonnement"><strong>79 €</strong></span>
                    <div class="divSepaOffreVIP"></div>
                    <h4 style="color: var(--rose)">Par mois</h4>
                    <p style="color: var(--rose)" class="txtCarteOffreVIP">Résiliable à tout moment</p>
                    <a class="btn btn-rose" href="https://makemyfunnel.floreflipo.com/inscription-offre-vip-ateliers/"><strong>JE DEVIENT V.I.P</strong></a>
                </div>
                <div class="carteOffreVIP">
                    <h2 class="titreOffreBackground text-center"><strong>🎁 EN BONUS</strong></h2>
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>💻</span><strong>MASTERCLASS</strong></h3>
                        <ul>
                            <li style="color: var(--gris); list-style: disc;"><p class="txtCarteOffreVIP">Avec Pierre Cauchois (expert en publicité digital)</p></li>
                            <li style="color: var(--gris); list-style: disc;"><p class="txtCarteOffreVIP">Avec Sandra Doggwiller (expert en copywriting)</p></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="titreCarteOffreVIP"><span>♥</span><strong>COMMUNAUTÉ PRIVÉE</strong></h3>
                        <p class="txtCarteOffreVIP">Qui regroupe tous mes clients</p>
                    </div>
                </div>
            </div>
        </div></div>
</div>

<!-- FIN Page Mes ateliers -->
