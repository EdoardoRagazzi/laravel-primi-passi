<?php

//Creating a Class User
class User {
    public $name;
    public $surname;
    public $discount;
    public $age;

    function __construct($_name,$_surname,$_discount,$_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->discount = $_discount;
        $this->age = $_age;
    }
   
}


//It's not essential  to close php
?> 