<?php
    require_once "UserAdmin.php";
    require_once "Customer.php";

    $userAdmin = new UserAdmin("Hello", "Kitty", "hellokitty@gmail.com", "hellokitty");
    $customer= new Customer("Edogawa", "Conan", "edogawaconan@gmail.com", "edogawaconan", "New York", "New York", "USA");

    echo $userAdmin->getName()."\n";
    echo $userAdmin->getEmail()."\n";
    echo $userAdmin->getUsername()."\n";
    echo $userAdmin->isAdmin()."\n";

    echo $customer->getName()."\n";
    echo $customer->getEmail()."\n";
    echo $customer->getUsername()."\n";
    echo $customer->isAdmin()."\n";
    echo $customer->getCity()."\n";
    echo $customer->getState()."\n";
    echo $customer->getCountry()."\n";
?>