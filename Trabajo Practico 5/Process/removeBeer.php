<?php
    require_once ("../Config/Autoload.php");
    use Config\Autoload as Autoload;
    use Repositories\BeerRepository as BeerRepository;
    use Models\Beer as Beer;
    use Repositories\IBeer as IBeer;

    Autoload ::Start();

    if($_POST){

        $beerCode = $_POST['btnRemove'];

        $repository = new BeerRepository();
        $repository->delete($beerCode);

        echo "<script> alert('Se ha eliminado correctamente la Cerveza seleccionada!');";  
	    echo "window.location = '../list.php'; </script>";
    }
?>