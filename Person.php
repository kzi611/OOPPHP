<?php
    interface Person {
        public function getFirstName();
        public function setFirstName($fname);
        public function getLastName();
        public function setLastName($lname);
        public function getName();
        public function setName($fname, $lname);
        public function getEmail();
        public function setEmail($email);
        public function getUsername();
        public function setUsername($username);
        public function isAdmin();
    }
?>
