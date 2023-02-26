<?php

class Person{

    private $name;
    private $email;

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

}

// test data
$person = new Person();
$person->setName("Yusuf");
$person->setEmail("yusuf@gmail.com");

// display info on webpage
echo "<strong> Name: ".$person->getName()." </strong><br>";
echo "<strong>Email: ".$person->getEmail()." </strong><br>";