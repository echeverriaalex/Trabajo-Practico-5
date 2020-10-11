<?php
    namespace Models;
    use Models\Maritime as Maritime;

    class Ship extends Maritime{

        private $propelQuantity;

        public function __construct($name ='', $maxknots = '', $propelQuantity =''){

            parent::__construct($name, $maxknots);
            $this->setPropelQuantity($propelQuantity);           
        }

        public function setPropelQuantity($propelQuantity){$this->propelQuantity = $propelQuantity;}
        public function getPropelQuantity(){return $this->propelQuantity;}

        public function __toString(){return "<br>Propel Quantity: ".$this->getPropelQuantity().parent::__toString(); }
    }
?>