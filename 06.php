<?php
include 'includes/header.php';

//Constructor property promotion
class User
{


    //Constructor de la clase User
    public function __construct(
        public $name,
        public $lastname,
        public $department,
        public $email,
        public $code,
    ) {}
}

$user1 = new User('Homero', 'Simpson', 'Sistemas', 'homero@simpson.com', 123456);
$user2 = new User('Marge', 'Simpson', 'RRHH', 'marge@simpson.com', 189456);



echo "<pre>";
var_dump($user1);
echo "</pre>";
echo "<pre>";
var_dump($user2);
echo "</pre>";
