<?php
require_once "Person.php";

class Customer implements Person {
    public $fname;
    public $lname;
    public $email;
    public $username;
    private $city;
    private $state;
    private $country;

    public function __construct($fname, $lname, $email, $username, $city, $state, $country) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->username = $username;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
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
        return "false";
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }
}
?>