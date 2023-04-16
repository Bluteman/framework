

<!-- Page Ressource -->

<div class="homePageRessources">
    <div class="imgHomePageRessourcesAmbiance">
        <div class="container-lg d-flex flex-column justify-content-around align-items-center contenueHomePageRessources">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1 style="color: var(--beige)"><strong>RESSOURCES</strong></h1>
                <div class="soulignementTxt"></div>
            </div>
            <p class="text-center text-light punchline">
                Dans cette page, je te présente des ressources qui pourront te permettre de </br>
                monter le business que tu souhaites. D’un côté, les outils que j’utilise au quotidien et </br>
                de l’autre, des expertises précieuses et complémentaires.</p>
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="text-light m-0 "><strong class="txtOutilsHomePageRessources txtActiveToggleButton">OUTILS</strong></h2>
                <div class="d-flex justify-content-center align-items-center ms-3 me-3">
                    <input type="checkbox" id="check">
                    <label for="check" class="buttonToggleHomePageRessources"></label>
                </div>
                <h2 class="text-light m-0"><strong class="txtExpertsHomePageRessources">EXPERTS</strong></h2>
            </div>
        </div>
    </div>
</div>

<div class="outilsPageRessources position-relative d-flex justify-content-center mb-5">
    <div  class="container-lg d-flex flex-column justify-content-around align-items-center zoneTxtIntroPageRessources">
        <p style="color: var(--rose)" class="text-center punchline txtExplicatifTemplateOutils visible">Voici une liste non exhaustive des outils que j’utilise au quotidien <br> pour m’aider à monter le business qui me rend fière.</p>
        <p style="color: var(--rose)" class="text-center punchline txtExplicatifTemplateExperts">Chaque entrepreneur est spécialisé dans son domaine. <br>
            Depuis que je me suis lancée, j’ai dû faire appel à différentes expertises pour créer le business dont je suis fière aujourd'hui. Dans cette page, je te présente des experts aux compétences complémentaires.
            Ils sauront t'accompagner dans la mise en place de tes projets si cela dépasse mes compétences.</p>
    </div>
    <div class="container-lg zoneContentIntroPageRessources">

        <div class="containerOutils visible"    > <!-- Zone Outils -->
            <?php
            $right = true;
            foreach ($outils as $outil) {
                if ($right){ $right = false; ?>

                    <div class="d-flex align-items-center justify-content-between carteLogicielRight ps-5 pe-5">
                        <div>
                            <h2 class="titreLogiciel"><strong><?= $outil->getTitle() ?></strong></h2>
                            <p class="m-0"><?= $outil->getContent() ?></p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="inputLogoLogiciel mb-3"><img src="img/<?= $outil->getImg(); ?>" class="imgLogo"></div>
                            <a class="btn btn-essayerLogiciel" href="<?= $outil->getUrl() ?>">ESSAYER</a>
                            <div class="decoSectionOutilsPageRessourcesArrow1"></div>
                        </div>
                    </div>

                <?php } else {$right = true; ?>

                    <div class="d-flex align-items-center justify-content-between carteLogicielLeft ps-5 pe-5">
                        <div class="d-flex flex-column align-items-center">
                            <div class="inputLogoLogiciel mb-3"><img src="img/<?= $outil->getImg(); ?>" class="imgLogo"></div>
                            <a class="btn btn-essayerLogiciel" href="<?= $outil->getUrl() ?>">ESSAYER</a>
                            <div class="decoSectionOutilsPageRessourcesArrow2"></div>
                        </div>
                        <div class="d-flex flex-column">
                            <h2 class="titreLogiciel"><strong><?= $outil->getTitle() ?></strong></h2>
                            <p class="m-0"><?= $outil->getContent() ?></p>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>
        </div>

        <div class="containerExperts"> <!-- Zone Expert -->
            <?php
            $right = true;
            foreach ($experts as $expert) {
                if ($right){ $right = false; ?>
                    <div class="d-flex align-items-center justify-content-between carteProfessionnelLeft ps-5 pe-5 row mt-5">
                        <div class="d-flex flex-column align-items-center col-3">
                            <div class="inputImgProfessionnel mb-3"><img src="img/<?= $expert->getImg(); ?>" class="imgProfessionnel"></div>
                            <h2 class="nomProfessionnel"><strong><?= $expert->getName() ?></strong></h2>
                        </div>
                        <div class="d-flex flex-column align-items-center col-9">
                            <h2 class="metierProfessionnel"><strong><?= $expert->getProfession() ?></strong></h2>
                            <p class="descriptionProfessionnel txtContentExpertRight text-end col-10"><?= $expert->getContent() ?></p>
                            <div class="d-flex align-items-center justify-content-between pt-2 reseaux">

                                <?php foreach ($expert->getReseaux() as $reseau) {

                                if ($reseau->getPlateform() === 4){ ?>
                                <a href="<?= $reseau->getLien() ?>" class="btn btn-rose">DÉCOUVRE SON UNIVERS</a>
                                <?php } else { ?>
                                        <a class="d-flex align-items-center justify-content-center inputReseaux m-3" href="<?= $reseau->getLien() ?>">
                                            <?php if($reseau->getPlateform()==1) { ?>
                                                <i style="color: var(--rose)" class="bi bi-instagram icon"></i>
                                                <?php } else if ($reseau->getPlateform()==2) {?>
                                                    <i style="background-color: var(--rose); color: var(--blancBeige)" class="bi bi-linkedin icon"></i>
                                                    <?php } else if ($reseau->getPlateform()==3) { ?>
                                                        <i style="background-color: var(--rose); color: var(--blancBeige)" class="bi bi-facebook"></i>
                                                        <?php } else if ($reseau->getPlateform()==4) { ?>
                                                            <a class="btn btn-rose btn-externe-experts" href="<?= $reseau->getLien() ?>">DÉCOUVRE SON UNIVERS</a>
                                                            <?php } else if ($reseau->getPlateform()==5) { ?>
                                                                <i style="color: var(--rose)" class="bi bi-calendar"></i>
                                                                <?php } ?>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                <?php } else {$right = true; ?>
                    <div class="d-flex align-items-center justify-content-between carteProfessionnelRight ps-5 pe-5 row">
                        <div class="d-flex flex-column align-items-center col-9">
                            <h2 class="metierProfessionnel"><strong><?= $expert->getProfession() ?></strong></h2>
                            <p class="descriptionProfessionnel txtContentExpertLeft col-10"><?= $expert->getContent() ?></p>

                            <div class="d-flex align-items-center justify-content-between pt-2 reseaux">

                                <?php foreach ($expert->getReseaux() as $reseau) {

                                    if ($reseau->getPlateform() === 4){ ?>
                                        <a href="<?= $reseau->getLien() ?>" class="btn btn-rose">DÉCOUVRE SON UNIVERS</a>
                                    <?php } else { ?>
                                        <a class="d-flex align-items-center justify-content-center inputReseaux m-3" href="<?= $reseau->getLien() ?>">
                                            <?php if($reseau->getPlateform()==1) { ?>
                                                <i style="color: var(--rose)" class="bi bi-instagram icon"></i>
                                            <?php } else if ($reseau->getPlateform()==2) {?>
                                                <i style="background-color: var(--rose); color: var(--blancBeige)" class="bi bi-linkedin icon"></i>
                                            <?php } else if ($reseau->getPlateform()==3) { ?>
                                                <i style="background-color: var(--rose); color: var(--blancBeige)" class="bi bi-facebook"></i>
                                            <?php } else if ($reseau->getPlateform()==4) { ?>
                                                <a class="btn btn-rose btn-externe-experts" href="<?= $reseau->getLien() ?>">DÉCOUVRE SON UNIVERS</a>
                                            <?php } else if ($reseau->getPlateform()==5) { ?>
                                                <i style="color: var(--rose)" class="bi bi-calendar"></i>
                                            <?php } ?>
                                        </a>
                                    <?php } ?>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center col-3">
                            <div class="inputImgProfessionnel mb-3"><img src="img/<?= $expert->getImg(); ?>" class="imgProfessionnel"></div>
                            <h2 class="nomProfessionnel"><strong><?= $expert->getName() ?></strong></h2>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
</div>

<!-- FIN Ressource -->