<?php
    namespace Models;

    class User{

        private $userName;
        private $password;
        private $firstName;
        private $lasName;
        private $email;

        public function __construct($userName = '', $password = '', $firstName= '', $lastName = '', $email = ''){

            $this->setUserName($userName);
            $this->setPassword($password);
            $this->setFirstName($firstName);
            $this->setLasName($lastName);
            $this->setEmail($email);
        }

        public function setUserName($userName){$this->userName = $userName;}
        public function getUserName(){return $this->userName;}

        public function setPassword($password){$this->password = $password;}
        public function getPassword(){return $this->password;}

        public function setFirstName($firstName){$this->firstName = $firstName;}
        public function getFirstName(){return $this->firstName;}

        public function setLasName($lastName){$this->lasName = $lastName;}
        public function getLastName(){return $this->lasName;}

        public function setEmail($email){$this->email = $email;}
        public function getEmail(){return $this->email;}
    }
?>