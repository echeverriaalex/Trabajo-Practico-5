<?php
    namespace Models;
    use Models\Transport as Transport;

    class Aerial extends Transport{

        private $engineQuantity;

        public function __construct($name, $engineQuantity){

            parent::__construct($name);
            $this->setEngineQuantity($engineQuantity);
        }
        
        public function setEngineQuantity($engineQuantity){$this->engineQuantity = $engineQuantity;}
        public function getEngineQuantity(){return $this->engineQuantity;}
        public function __toString(){return "<br>Engine Quantity: ".$this->getEngineQuantity().parent::__toString();}
    }
?>