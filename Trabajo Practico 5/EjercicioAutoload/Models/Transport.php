<?php
    namespace Models;
    
    abstract class Transport{

        private $name;

        public function __construct($name){$this->setName($name);}
        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}
        public function __toString(){return "<br>Name: ".$this->getName();}
    }
?>