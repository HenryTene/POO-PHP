<?php
include 'includes/header.php';

// Tipado de datos
class User{
    public $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

    //Constructor de la clase User
    public function __construct(string $nombre,string $lastname,string $department,string $email, int $code)
    {
        $this->name = $nombre;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

}

$user1 = new User('Homero','Simpson','Sistemas','homero@simpson.com',123456);
$user2 = new User('Marge','Simpson','RRHH','marge@simpson.com',189456);



echo "<pre>";
var_dump($user1);
echo "</pre>";
echo "<pre>";
var_dump($user2);
echo "</pre>";