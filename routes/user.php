<?php

//Creating a Class User
class User {
    public $name;
    public $surname;
    public $discount;

    function __construct($_name,$_surname,$_discount){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->discount = $_discount;
    }
    public function getFullName(){  
        return  $this->name . ' ' . $this->surname;
    }

    public function makeSale( $age ){
        if( $age > 65 ){
            $this->discount = 40;
        }
        return $this->discount;
    }
}


//It's not essential  to close php
?> 