<?php
    
    /* Esto lo tengo que poner si no hago el autoload

    require_once "Models/Transport.php";
    require_once "Models/Aerial.php";
    require_once "Models/Maritime.php";
    require_once "Models/Ship.php";
    require_once "Models/Cruiser.php";
    require_once "Models/BattleShip.php";
    require_once "Models/Airplane.php";
    
    use Models\Aerial as Aerial;
    use Models\Transport as Transport;
    use Models\Maritime as Maritime;
    use Models\Ship as Shìp;                    
    */
    
    require_once "Config/Autoload.php";
    use Config\Autoload as Autoload;

    use Models\Airplane as Airplane;
    use Models\BattleShip as BattleShip;
    use Models\Cruiser as Cruiser;
    
    $cruiser1 = new Cruiser("Cruiser 1", 60, 60, 20);
    $cruiser2 = new Cruiser("Cruiser 2", 40, 40, 40);
    $cruiser3 = new Cruiser("Cruiser 3", 20, 20, 60);
    $cruiser4 = new Cruiser("Cruiser 4");

    $battleShip1 = new BattleShip("Battleship 1", 35,35, 15);
    $battleShip2 = new BattleShip("Battleship 2", 25,25, 25);
    $battleShip3 = new BattleShip("Battleship 3", 15, 15, 35);
    $battleShip4 = new BattleShip("Battleship 4");

    $airplane1 = new Airplane("Airplane 1", 100, 100);
    $airplane2 = new Airplane("Airplane 2", 200, 200);
    $airplane3 = new Airplane("Airplane 3", 300, 300);
    $airplane4 = new Airplane("Airplane 4");
   
    #echo "<br><br><strong>Cruiser: </strong>".$cruiser1->__toString();    
    
    /*echo "<br>".$cruiser->__toString();
    echo "<br><br><strong>BatlleShip: </strong>".$battleShip->__toString(); 
    echo "<br><br><strong>Airplane: </strong>".$airplane->__toString();
    */

    $transportList = array();

    array_push($transportList, $cruiser1);
    array_push($transportList, $cruiser2);
    array_push($transportList, $cruiser3);
    array_push($transportList, $cruiser4);

    array_push($transportList, $battleShip1);
    array_push($transportList, $battleShip2);
    array_push($transportList, $battleShip3);
    array_push($transportList, $battleShip4);
    
    array_push($transportList, $airplane1);
    array_push($transportList, $airplane2);
    array_push($transportList, $airplane3);
    array_push($transportList, $airplane4);

    #var_dump($transportList, $airplane3);

    foreach($transportList as $transport){

        echo "<pre>$transport</pre><hr>";
    }
    

    #array_pop($transportList);

    /*
    foreach($transportList as $transport){
        echo '===============================================================';
        echo '<pre>';
        echo  $transport;
        echo '</pre>';
    }
    */


    /*
    foreach($transportList as $key -> $transport){

        foreach($transport as $key -> $value){

            echo "$key -> $value";
        }
    }*/
?>