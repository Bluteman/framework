
<?php if (\App\Session::getUser()) :?>
    <div>
        <div class="container-lg d-flex flex-column justify-content-center">
            <div class="text-center pt-5 pb-5">
                <h1 class="border rounded border border-danger-subtle p-3"><strong>ADMIN PAGE</strong></h1>
                <div>
                    <a class="btn btn-rose" href="?type=user&action=signOut">LogOut</a>
                </div>
            </div>

            <div class="text-center pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>DOCUMENTATION</strong></h2>
                <div class="border rounded p-4">
                    <p>Les modification sont à faire sur un ordinateur</p>
                    <p>Modifier un élément, il faut le suprimer et le recréer</p>
                    <p>l'élément < br> permet de faire un saut de ligne où on le souhaite</p>
                    <p>(ex : Developeur web à plein temps < br><br> truc machin truc)</p>
                </div>
            </div>

            <!-- Atelier -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES ATELIERS</strong></h2>
                <div>
                    <p>Dispo = 1 => il n'est pas disponible</p>
                    <p>Dispo = 2 => il est disponible</p>
                </div>
                <div>
                    <?php foreach ($ateliers as $atelier) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div class="d-flex flex-column">
                                <div>
                                    <h3><?= $atelier->getName() ?></h3>
                                    <h3><?= $atelier->getContent() ?></h3>
                                </div>
                                <div class="d-flex gap-3">
                                    <p>Dispo :</p>
                                    <h4><?= $atelier->getDispo() ?></h4>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=atelier&action=remove&id=<?= $atelier->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=atelier&action=create">ajouter un atelier</a>
                </div>
            </div>

            <!-- Experts -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES EXPERTS</strong></h2>

                <div>
                    <?php foreach ($experts as $expert) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div>
                                <h3><?= $expert->getName() ?></h3>
                                <h3><?= $expert->getId() ?></h3>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=expert&action=remove&id=<?= $expert->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=expert&action=create">ajouter un expert</a>
                </div>
            </div>

            <!-- Reseaux -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES RÉSEAUX DES EXPERTS</strong></h2>
                <div class="pt-5 pb-5">
                    <h3>Numéro des plateforms</h3>
                    <ul>
                        <p>instagram = 1</p>
                        <p>linkedin = 2</p>
                        <p>facebook = 3</p>
                        <div class="d-flex gap-3">
                            <p>lien Externe = 4</p>
                            <p>(Si l'expert à un site web à lui ou une autre plateforme de reseaux)</p>
                        </div>
                        <p>calendly = 5</p>
                    </ul>
                </div>
                <div>
                    <?php foreach ($reseaux as $reseau) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div>
                                <div class="d-flex gap-3">
                                    <p>Numéro de l'Expert : </p>
                                    <h3><?= $reseau->getExpertId() ?></h3>
                                </div>
                                <div class="d-flex gap-3">
                                    <p>Numéro de la Plateform : </p>
                                    <h3><?= $reseau->getPlateform() ?></h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=reseau&action=remove&id=<?= $reseau->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=reseau&action=create">ajouter un réseaux à l'expert</a>
                </div>
            </div>

            <!-- Outils -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES OUTILS</strong></h2>

                <div>
                    <?php foreach ($outils as $outil) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div>
                                <h3><?= $outil->getTitle() ?></h3>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=outil&action=remove&id=<?= $outil->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=outil&action=create">ajouter un outil</a>
                </div>
            </div>

            <!-- Avis -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES AVIS</strong></h2>

                <div>
                    <?php foreach ($avis as $avi) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div>
                                <div class="d-flex justify-content-evenly">
                                    <h3><?= $avi->getName() ?></h3>
                                    <h3>page_id :<?= $avi->getPageId() ?></h3>
                                </div>
                                <p><?= $avi->getContent() ?></p>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=avis&action=remove&id=<?= $avi->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=avis&action=create">ajouter un avis</a>
                </div>
            </div>

            <!-- FAQ -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LA FAQ</strong></h2>

                <div>
                    <?php foreach ($faqs as $faq) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div>
                                <h3><?= $faq->getQuestion() ?></h3>
                            </div>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=faq&action=remove&id=<?= $faq->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=faq&action=create">ajouter une Question</a>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger p-3 text-center mb-3"><strong>MODIFIER LES VIDEOS</strong></h2>

                <div>
                    <?php foreach ($videos as $video) { ?>
                        <div class="border rounded border-primary p-3 d-flex justify-content-between align-items-center m-2">
                            <iframe width="30%" height="150px" src="<?=  $video->getUrl()?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="d-flex">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=video&action=remove&id=<?= $video->getId() ?>"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=video&action=create">ajouter une vidéo</a>
                </div>
            </div>


        </div>
    </div>


<?php endif; ?>
