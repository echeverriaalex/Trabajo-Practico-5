<?php
    namespace Repositories;
    
    use Repositories\IBeer as IBeer;    
    use Models\Beer as Beer;    

    class BeerRepository implements IBeer{

        private $beerList = array();

        # Dar de Alta
        public function add(Beer $newBeer){

            $this->retrieveData();
            array_push($this->beerList, $newBeer);
            $this->saveData();
        }
        
        # Listar
        public function getAll(){

            $this->retrieveData();
            return $this->beerList;
        }

        # Quitar
        public function delete($code){

            $this->retrieveData();
            $newList = array();

            foreach($this->beerList as $beer){

                if($beer->getCode() != $code){

                    array_push($newList, $beer);
                }
            }
            $this->beerList = $newList;
            $this->saveData();
        }        

        public function saveData(){

            $arrayToDecode = array();

            foreach($this->beerList as $beer){

                $valueArray['code'] = $beer->getCode();
                $valueArray['name'] = $beer->getName();
                $valueArray['description'] = $beer->getDescription();
                $valueArray['type'] = $beer->getType();

                array_push($arrayToDecode, $valueArray);
            }

            $jsonContent = json_encode($arrayToDecode, JSON_PRETTY_PRINT);
            file_put_contents('../Data/beer.json', $jsonContent);
        }

        public function retrieveData(){

            $this->beerList = array();

            $jsonPath = $this->getJsonFilePath();
            // $jsonContent = file_get_contents("../Data/beer.json");
            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent)? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valueArray){

                //var_dump($valueArray);
                //$beer = new Beer(, ,, );

                $beer = new Beer();
                $beer->setCode($valueArray["code"]);
                $beer->setName($valueArray["name"]);
                $beer->setDescription( $valueArray["description"]);
                $beer->settype($valueArray["type"]);



                array_push($this->beerList, $beer);
            }
        }

        public function getJsonFilePath(){

            $initialPath = "Data/beer.json";

            if(file_exists($initialPath)){

                $jsonFilePath = $initialPath;
            }
            else{

                $jsonFilePath = "../". $initialPath;
            }
            return $jsonFilePath;
        }
    }
?>