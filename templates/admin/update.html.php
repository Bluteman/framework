



<div class="container-lg containerCreateElement pt-5 pb-5">
    <a href="?type=admin&action=index" class="btn btn-outline-success"><i class="bi bi-arrow-left me-2"></i>retour</a>
    <div>

        <?php if($expert) : ?>

            <div class="pt-5 pb-5">
                <div>
                    <h3 class="text-center"><strong>Edit d'un expert</strong></h3>
                    <hr>
                </div>
                <form
                    enctype="multipart/form-data"
                    action="?type=expert&action=update&id=<?= $expert->getId() ?>"
                    method="post"
                    class="d-flex flex-column align-items-center">
                    <!---->
                    <img class="imgProfil m-4" src="./img/<?= $expert->getImg() ?>" alt="image expert">

                    <input type="hidden" name="idUpdate" value="<?= $expert->getId() ?>">
                    <input class="form-control mb-2 text-center" type="text" name="name" placeholder="name" value="<?= $expert->getName() ?>">
                    <input class="form-control mb-2 text-center" type="text" name="content" placeholder="content" value="<?= $expert->getContent() ?>">
                    <input class="form-control mb-2 text-center" type="text" name="profession" placeholder="profession" value="<?= $expert->getProfession() ?>">
                    <input class="form-control mb-2 text-center" type="file" name="image">
                    <button class="btn btn-success" type="submit">Edit</button>
                </form>
            </div>

        <?php endif; ?>
    </div>
</div>
