<?php
    namespace Models;
    use Models\Transport as Transport;

    class Maritime extends Transport{

        private $maxKnots;

        public function __construct($name = '', $maxKnots = ''){

            parent::__construct($name);
            $this->setMaxKnots($maxKnots);
        }

        public function setMaxKnots($maxKnots){$this->maxKnots = $maxKnots;}
        public function getMaxKnots(){return $this->maxKnots;}
        public function __toString(){return "<br> Max Knots: ".$this->getMaxKnots().parent::__toString();}
    }
?>