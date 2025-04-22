<?php
include 'includes/header.php';

//Métodos
class User{
    public $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

    //Constructor de la clase User
    public function __construct($nombre,$lastname,$department,$email, $code)
    {
        $this->name = $nombre;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

    public function nameUser()
    {
        echo $this->name . " " . $this->lastname . "<br>";
    }

    public function departmentUser()
    {
        return $this->department;
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

$user1->nameUser();
echo $user1->departmentUser();
echo "<br>";
$user2->nameUser();
echo $user2->departmentUser();
echo "<br>";
