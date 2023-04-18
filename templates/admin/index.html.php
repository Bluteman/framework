
<?php if (\App\Session::getUser()) :?>
    <div>
        <div class="container-lg d-flex flex-column justify-content-center">
            <div class="text-center pt-5 pb-5">
                <h1 class="border rounded border border-danger-subtle border-5 p-3"><strong>ADMIN PAGE</strong></h1>
                <div>
                    <a class="btn btn-rose" href="?type=user&action=signOut"><i class="bi bi-box-arrow-left me-2"></i>LogOut</a>
                </div>
            </div>

            <div class="text-center pt-5 pb-5">
                <h2 class="border rounded border border-danger border-2 p-3 text-center mb-3"><strong>DOCUMENTATION</strong></h2>
                <div class="border rounded p-4">
                    <p>Les modification sont à faire sur un ordinateur</p>
                </div>
            </div>


            <!-- Experts -->
            <hr>
            <div class="pt-5 pb-5">
                <h2 class="border rounded border border-danger border-2 p-3 text-center mb-3"><strong>MODIFIER LES EXPERTS</strong></h2>

                <div>
                    <?php foreach ($experts as $expert) { ?>
                        <div class="d-flex justify-content-between align-items-center border border-primary rounded m-2 p-3">
                            <div class="d-flex align-items-center text-center">
                                <img class="imgProfil m-4" src="./img/<?= $expert->getImg() ?>">
                                <div>
                                    <h3><?= $expert->getName() ?></h3>
                                    <h3><?= $expert->getId() ?></h3>
                                </div>
                            </div>

                            <div class="d-flex flex-column justify-content-around">
                                <a class="d-flex align-items-center text-danger border rounded p-2  m-1" href="?type=expert&action=remove&id=<?= $expert->getId() ?>"><i class="bi bi-trash"></i></a>
                                <a class="d-flex align-items-center text-warning border rounded p-2  m-1" href="?type=expert&action=update&id=<?= $expert->getId() ?>"><i class="bi bi-pencil"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-rose" href="?type=expert&action=create">ajouter un expert</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
<?php endif; ?>
