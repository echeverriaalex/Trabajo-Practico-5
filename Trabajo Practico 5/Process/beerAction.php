<?php
    namespace Process;

    require_once ("../Config/Autoload.php");
    use Config\Autoload as Autoload;
    use Repositories\BeerRepository as BeerRepository;    
    use Models\Beer as Beer;
    use Repositories\IBeer as IBeer;

    Autoload ::Start();
    if($_POST){

        $newBeer = new Beer($_POST["code"], $_POST["name"], $_POST["description"], $_POST["type"]);
        $repository = new BeerRepository();
        $repository->add($newBeer);

        echo "<script> alert('Cerveza agregada con exito ');";
        echo "window.location = '../list.php'; </script>";
    }
?>