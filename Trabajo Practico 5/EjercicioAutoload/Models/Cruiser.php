<?php
    namespace Models;
    use Models\Ship as Ship;

    class Cruiser extends Ship{

        private $capacity;

        public function __construct($name = '', $maxKnots = '', $propelQuantity = '', $capacity = ''){

            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->setCapacity($capacity);
        }

        public function setCapacity($capacity){$this->capacity = $capacity;}
        public function getCapacity(){return $this->capacity;}

        public function __toString(){return "<br>Capacity: ".$this->getCapacity().parent::__toString();}
    }
?>