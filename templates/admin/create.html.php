
<div class="container-lg containerCreateElement pt-5 pb-5">
    <a href="?type=admin&action=index" class="btn btn-outline-success">retour</a>
    <div>
        <?php if ($selecteur=="atelier") { ?>

            <div class="pt-5 pb-5">
                <div>
                    <p>Dispo = 1 => il n'est pas disponible</p>
                    <p>Dispo = 2 => il est disponible</p>
                </div>
                <form
                    enctype="multipart/form-data"
                    action="?type=atelier&action=create"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->

                    <input class="form-control mb-2 text-center" type="text" name="name" placeholder="name">
                    <input class="form-control mb-2 text-center" type="text" name="content" placeholder="content">
                    <input class="form-control mb-2 text-center" type="number" name="price" placeholder="price">
                    <input class="form-control mb-2 text-center" type="number" name="time" placeholder="time">
                    <input class="form-control mb-2 text-center" type="text" name="url" placeholder="url">
                    <input class="form-control mb-2 text-center" type="number" name="dispo" placeholder="Dispo : (1 / 2) ?">
                    <button class="btn btn-success" type="submit">Ajout</button>
                </form>
            </div>

        <?php } if($selecteur=="expert") { ?>

            <div class="pt-5 pb-5">
                <div>
                    <h3>Les réseaux seront à ajouter dans la section en dessous de Expert dans la page précédente</h3>
                </div>
                <form
                    enctype="multipart/form-data"
                    action="?type=expert&action=create"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->

                    <input class="form-control mb-2 text-center" type="text" name="name" placeholder="name">
                    <input class="form-control mb-2 text-center" type="text" name="content" placeholder="content">
                    <input class="form-control mb-2 text-center" type="text" name="profession" placeholder="profession">
                    <input class="form-control mb-2 text-center" type="file" name="img">
                    <button class="btn btn-success" type="submit">Ajout</button>
                </form>
            </div>

        <?php } if($selecteur=="reseau") { ?>

            <div class="pt-5 pb-5">
                <div class="d-flex flex-column mb-4 pt-5 pb-5">
                    <h3>plateforme de réseau</h3>
                    <div>
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
                    <h3>expert_id = le numéro de l'expert</h3>
                    <p>( Disponible sur la précédente page dans la section expert )</p>
                </div>
                <form
                    enctype="multipart/form-data"
                    action="?type=reseau&action=create"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->

                    <input class="form-control mb-2 text-center" type="number" name="plateform" placeholder="plateforme de réseau">
                    <input class="form-control mb-2 text-center" type="text" name="lien" placeholder="lien du réseau">
                    <input class="form-control mb-2 text-center" type="number" name="expert_id" placeholder="expert_id">
                    <button class="btn btn-success" type="submit">Ajout</button>
                </form>
            </div>


        <?php } else if($selecteur=="outil") { ?>

            <div class="pt-5 pb-5">
                <form
                    enctype="multipart/form-data"
                    action="?type=outil&action=create"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->

                    <input class="form-control mb-2 text-center" type="text" name="title" placeholder="title">
                    <input class="form-control mb-2 text-center" type="text" name="content" placeholder="content">
                    <input class="form-control mb-2 text-center" type="text" name="url" placeholder="url">
                    <input class="form-control mb-2 text-center" type="file" name="img">
                    <button class="btn btn-success" type="submit">Ajout</button>
                </form>
            </div>

        <?php } else if($selecteur=="avis") { ?>

        <div class="pt-5 pb-5">
            <h3>page_id = le numéro de la page ou l'avis apparaitra</h3>
            <div>
                <ul>
                    <p>Accueil = 1</p>
                    <p>A propos = 2</p>
                    <p>Mon coaching = 3</p>
                    <p>Mes ateliers = 4</p>
                    <p>Ressources = 5</p>
                    <p>Contact = 6</p>
                </ul>
                <h4 class="text-center text-warning border border-danger rounded p-2"><strong>Les avis ne peuvent être présent que sur les pages : 1, 2, 3, 4</strong></h4>
            </div>
            <form
                enctype="multipart/form-data"
                action="?type=avis&action=create"
                method="post"
                class="d-flex flex-column align-items-center">
                <!---->

                <input class="form-control mb-2 text-center" type="number" name="page_id" placeholder="page_id">
                <input class="form-control mb-2 text-center" type="text" name="name" placeholder="name">
                <input class="form-control mb-2 text-center" type="text" name="content" placeholder="content">
                <input class="form-control mb-2 text-center" type="text" name="profession" placeholder="profession">
                <input class="form-control mb-2 text-center" type="file" name="img">
                <button class="btn btn-success" type="submit">Ajout</button>
            </form>
        </div>

        <?php } else if($selecteur=="faq") { ?>

        <div class="pt-5 pb-5">
            <div>
                <h3>Le numéro de la question permet de la diférencier des autres l'or de l'affichage il ne doit jamais être pareil que les autres questions</h3>
                <h3>Il doit être écrit en lettre en anglais avec une majuscule en première lettre</h3>
            </div>
            <form
                enctype="multipart/form-data"
                action="?type=faq&action=create"
                method="post"
                class="d-flex flex-column align-items-center">
                <!---->

                <input class="form-control mb-2 text-center" type="text" name="question" placeholder="question">
                <input class="form-control mb-2 text-center" type="text" name="reponse" placeholder="reponse">
                <input class="form-control mb-2 text-center" type="text" name="number" placeholder="numéro One, Two, Three, ...">
                <button class="btn btn-success" type="submit">Ajout</button>
            </form>
        </div>

        <?php } else if($selecteur=="video") { ?>

            <div class="pt-5 pb-5">
                <form
                    enctype="multipart/form-data"
                    action="?type=video&action=create"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->

                    <input class="form-control mb-2 text-center" type="text" name="url" placeholder="url">
                    <button class="btn btn-success" type="submit">Ajout</button>
                </form>
            </div>

        <?php } ?>
    </div>
</div>



