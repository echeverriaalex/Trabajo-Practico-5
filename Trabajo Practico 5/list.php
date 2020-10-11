<?php
    include ("header.php");
    include ("nav.php");

    use Config\Autoload as Autoload;    
    use Repositories\BeerRepository as BeerRepository;
    use Models\Beer as Beer;

    Autoload::Start();

    $repo = new BeerRepository();
    $arrayBeers = $repo->getAll();
?>

<main>
    <section>
        <div>
            <h2> Listado de Cervezas </h2>
            <table>
                <thead>
                    <th> Code </th>
                    <th> Name </th>
                    <th> Description </th>
                    <th> Type </th>
                </thead>

                <tbody>
                    <form action="Process/removeBeer.php" method="POST">
                        <?php
                            if(isset($arrayBeers)){

                                foreach($arrayBeers as $beer){
                        ?>
                            <tr>
                                <td> <?php echo $beer->getCode(); ?> </td>
                                <td> <?php echo $beer->getName(); ?> </td>
                                <td> <?php echo $beer->getDescription(); ?> </td>
                                <td> <?php echo $beer->getType(); ?> </td>

                                <td>
                                    <button type="submit" name="btnRemove" value="<?php echo $beer->getCode(); ?>"> Eliminar </button> 
                                </td>
                            </tr>

                        <?php
                                }
                            }
                        ?>
                    </form>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include("footer.php"); ?>