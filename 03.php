<?php
include 'includes/header.php';


//Atributos de una clase
class User{
    public $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

}

$user1 = new User();
$user1->name = "Homero";
$user1->lastname = "Simpson";
$user1->department = "Sistemas";
$user1->email = "homero@domain.com";
$user1->code = 290478675;

echo "<pre>";
var_dump($user1);
echo "</pre>";

$user2 = new User();
$user2->name = "Marge";
$user2->lastname = "Simpson";
$user2->department = "Sistemas";
$user2->email = "marge@domain.com";
$user2->code = 134535523;

echo "<pre>";
var_dump($user2);
echo "</pre>";