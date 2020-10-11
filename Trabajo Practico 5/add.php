<?php
    include ("header.php");
    include ("nav.php");
?>

<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4"> Cervezas</h2>
            <form action="process/beerAction.php" method="post" class="bg-light-alpha p-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="code"> <p> Code </p> </label>
                            <input type="text" name="code" id="code" value="" >

                            <label for="name"> <p> Name </p> </label>
                            <input type="text" name="name" id="name" value="">

                            <label for="description"> <p> Description </p> </label>
                            <input type="text" name="description" id="description" value="">
                            
                            <label for="type"> <p> Type </p> </label>
                            <input type="text" name="type" id="type" value="">
                        </div>
                    </div>
                </div>
                <button type="submit" name="button " class="btn btn-dark ml-auto d-block"> Agregar </button>
            </form>
        </div>
    </section>
</main>

<?php include("footer.php");