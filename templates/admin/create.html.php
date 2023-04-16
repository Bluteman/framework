




<div class="container-lg containerCreateElement pt-5 pb-5">
    <a href="?type=admin&action=index" class="btn btn-outline-success">retour</a>
    <div>

        <?php if($selecteur=="expert") : ?>

            <div class="pt-5 pb-5">
                <div>
                    <h3 class="text-center">Ajout d'un nouveau expert</h3>
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

        <?php endif; ?>
    </div>
</div>



