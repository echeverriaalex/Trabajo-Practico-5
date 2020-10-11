<?php
    namespace Models;
    use Models\Ship as Ship;

    class BattleShip extends Ship{

        private $armament;

        public function __construct($name = '', $maxKnots = '', $propellQuantity = '', $armament = ''){

            parent::__construct($name, $maxKnots, $propellQuantity);
            $this->setArmament($armament);            
        }

        public function setArmament($armament){$this->armament = $armament;}
        public function getArmament(){return $this->armament;}

        public function __toString(){return "<br>Armament: ".$this->getArmament().parent::__toString();}
    }
?>