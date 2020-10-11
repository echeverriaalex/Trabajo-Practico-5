<?php
    namespace Models;

    class Beer{

        private $code;
        private $name;
        private $description;
        private $type;

        public function __construct($code = '', $name = '', $description = '', $type = ''){

            $this->setCode($code);
            $this->setName($name);
            $this->setDescription($description);
            $this->settype($type);
        }

        public function setCode($code){$this->code = $code;}
        public function getCode(){return $this->code;}

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}

        public function setDescription($description){$this->description = $description;}
        public function getDescription(){return $this->description;}

        public function setType($type){$this->type = $type;}
        public function getType(){return $this->type;}
    }
?>