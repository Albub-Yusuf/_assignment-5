<?php
ob_start(); //supress person.php files echo data in globals.php
require_once "person.php";
ob_clean(); //supress person.php files echo data in globals.php

if((isset($_POST['user_name']) && !empty($_POST['user_name'])) && (isset($_POST['user_email']) && !empty($_POST['user_email']))){

    $userName =  $_POST['user_name'];
    $userEmail = $_POST['user_email'];

    showUserData($userName,$userEmail);
 
}else{

    echo "Invalid input... Please fill username and email address correctly <br>";
    
    echo "<a href='index.php'>Back</a>";

}


function showUserData($name,$email){
    $user = new Person();
    $user->setName($name);
    $user->setEmail($email);

    // display info on webpage
    echo "<strong> Name: ".$user->getName()." </strong><br>";
    echo "<strong>Email: ".$user->getEmail()." </strong><br>";
}