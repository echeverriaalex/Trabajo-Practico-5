<?php
    namespace Models;
    use Models\Aerial as Aerial;

    class Airplane extends Aerial{

        private $capacity;

        public function __construct($name = '', $maxKnots = '', $capacity = ''){

            parent::__construct($name, $maxKnots);
            $this->setCapacity($capacity);
        }

        public function setCapacity($capacity){$this->capacity = $capacity;}
        public function getCapacity(){return $this->capacity;}
        public function __toString(){ return "<br>Capacity: ".$this->getCapacity().parent::__toString();}
    }
?>