<?php 
    namespace Repositories;
    use Models\Beer as Beer;

    interface IBeer{
        function add(Beer $newBeer);
        function delete($code);
        function getAll();    
    }
?>
