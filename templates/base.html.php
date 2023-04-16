<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/<?= $css ?>.css">
    <link rel="icon" href="#">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg d-flex align-items-center justify-content-between">
            <a id="logoNavBarre" href="?type=advanced&action=index">LOGO</a>
            <!--<a id="logoNavBarre" class="navbar-brand text-light imgBase" href="#">LOGO</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-light" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="#">lien</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">lien</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">lien</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">lien</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">lien</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> <!-- BAR DE NAVIGATION -->

<div>

    <?= $pageContent ?>

</div>

<section class="footer">
    <div class="container-lg">
        <div class="contenueFooter">
            <!--<a id="logoFooter" class="imgBase" href="#"></a>-->
            <a id="logoFooter" href="?type=advanced&action=index">LOGO</a>
            <div class="pt-2 col-4 arboReseaux">
                <ul class="p-0 m-0">
                    <li><a class="footer-link" href="#">lien</a></li>
                    <li><a class="footer-link" href="#">lien</a></li>
                    <li><a class="footer-link" href="#">lien</a></li>
                </ul>
                <ul class="p-0 m-0">
                    <li><a class="footer-link" href="#">lien</a></li>
                    <li><a class="footer-link" href="#">lien</a></li>
                    <li><a class="footer-link" href="#">lien</a></li>
                </ul>
                <ul class="p-0 m-0">
                    <li><a class="footer-link" href="?type=admin&action=register">Inscription</a></li>
                    <li><a class="footer-link" href="?type=admin&action=login">Connexion</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center justify-content-between pt-2 col-4 ps-5 reseaux">
                <a class="d-flex align-items-center justify-content-center inputReseaux ms-5" href="#"><i class="bi bi-instagram icon"></i></a>
                <a class="d-flex align-items-center justify-content-center inputReseaux reseauLinkedIn" href="#"><i class="bi bi-linkedin icon"></i></a>
            </div>
        </div>

        <hr>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p style="color: var(--white)" class="m-0 p-0 txtFooterLink">Copyright ©2023 NOM. Tous droits réservés.</p>
            <a style="color: var(--white)" class="m-0 p-0 txtFooterLink" href="?type=static&action=showMentionsLegales">Mentions Légales</a>
            <p style="color: var(--white)" class="m-0 p-0 txtFooterLink">France</p>
        </div>
    </div>
</section> <!-- FOOTER -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>