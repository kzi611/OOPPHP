<?php
require_once "Person.php";

class UserAdmin implements Person {
    public $fname;
    public $lname;
    public $email;
    public $username;

    public function __construct($fname, $lname, $email, $username) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->username = $username;
    }

    public function getFirstName() {
        return $this->fname;
    }

    public function setFirstName($fname) {
        $this->fname = $fname;
    }

    public function getLastName() {
        return $this->lname;
    }

    public function setLastName($lname) {
        $this->lname = $lname;
    }

    public function getName() {
        return $this->fname . ' ' . $this->lname;
    }

    public function setName($fname, $lname) {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function isAdmin() {
        return "true";
    }
}
?>