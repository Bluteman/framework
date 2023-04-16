<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/locomotive-scroll.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/<?= $css ?>.css">
    <link rel="icon" href="https://floreflipo.com/wp-content/uploads/2020/04/cropped-IMG_20181112_100912-3-192x192.png">
</head>
<body onload="infiniteAnimation()" data-scroll-container>


<header data-scroll-section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg d-flex align-items-center justify-content-between">
            <a id="logo" class="navbar-brand text-light imgBase" href="?type=Advanced&action=index"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-light" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="?type=Advanced&action=showAPropos">A propos</a>
                    </li>
                    <li>
                        <a class="nav-link" href="?type=Advanced&action=showMonCoaching">Mon coaching</a>
                    </li>
                    <li>
                        <a class="nav-link" href="?type=Advanced&action=showAteliers">Mes ateliers</a>
                    </li>
                    <li>
                        <a class="nav-link" href="?type=Advanced&action=showRessources">Ressources</a>
                    </li>
                    <li>
                        <a class="nav-link" href="?type=Static&action=showContact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> <!-- BAR DE NAVIGATION -->


<?php if(\App\View::getInfo()) { ?>
<div data-scroll-section class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> <?= \App\View::getInfo() ?> </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>


<div>

    <?= $pageContent ?>

</div>


<section data-scroll-section class="footer">
    <div class="container-lg">
        <div class="contenueFooter">
            <a id="logoFooter" class="imgBase" href="?type=Advanced&action=index"></a>
            <div class="pt-2 col-4 arboReseaux">
                <ul class="p-0 m-0">
                    <li><a class="footer-link" href="?type=Advanced&action=index">Acceuil</a></li>
                    <li><a class="footer-link" href="?type=Advanced&action=showAPropos">A propos</a></li>
                    <li><a class="footer-link" href="?type=Advanced&action=showMonCoaching">Mon coaching</a></li>
                </ul>
                <ul class="p-0 m-0">
                    <li><a class="footer-link" href="?type=Advanced&action=showAteliers">Mes ateliers</a></li>
                    <li><a class="footer-link" href="?type=Advanced&action=showRessources">Ressources</a></li>
                    <li><a class="footer-link" href="?type=Static&action=showContact">Contact</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center justify-content-between pt-2 col-4 ps-5 reseaux">
                <a class="d-flex align-items-center justify-content-center inputReseaux ms-5" href="https://www.instagram.com/flore_flipo/"><i style="color: var(--rose)" class="bi bi-instagram icon"></i></a>
                <a class="d-flex align-items-center justify-content-center inputReseaux reseauLinkedIn" href="https://www.linkedin.com/in/flore-flipo/"><i style="background-color: var(--rose); color: var(--blancBeige)" class="bi bi-linkedin icon"></i></a>
            </div>
        </div>

        <hr style="color: var(--white)">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p style="color: var(--white)" class="m-0 p-0 txtFooterLink">Copyright ©2023 Flore Flipo. Tous droits réservés.</p>
            <div class="trustpilot-widget" data-locale="fr-FR" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="64073050a1a5464aeb004cb5" data-style-height="24px" data-style-width="100%" data-theme="light" data-min-review-count="10" data-style-alignment="center">
                <div class="d-flex align-items-center">
                    <div class="imgBase imgIconTrustpilot"></div>
                    <a class="m-0 p-0 txtFooterLink" href="https://fr.trustpilot.com/review/floreflipo.com" target="_blank" rel="noopener">Trustpilot</a>
                </div>
            </div>
            <a style="color: var(--white)" class="m-0 p-0 txtFooterLink" href="?type=Static&action=showMentionsLegales">Mentions Légales</a>
            <p style="color: var(--white)" class="m-0 p-0 txtFooterLink">France</p>
        </div>
    </div>
</section> <!-- FOOTER -->





<!-- TrustBox script -->
<script type=“text/javascript” src=“//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js” async></script>
<!-- End TrustBox script -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php if($locomotive){?>

    <script src="js/locomotive-scroll.js"></script>
    <script>
        const scroll = new LocomotiveScroll({
            el: document.querySelector('[data-scroll-container]'),
            smooth: true
        });
    </script>


<?php }?>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<script src="js/main.js"></script>
</body>
</html>