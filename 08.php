<?php
include 'includes/header.php';

//Modificadores de acceso
class User{

    //Public: Se puede acceder desde cualquier parte del programa
    //Protected: Se puede acceder desde la misma clase y desde las clases que heredan de ella
    //Private: Se puede acceder solo desde la misma clase
    protected $name;
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
    //Método para obtener el nombre
    public function obtenerNombre()
    {
       
        return $this->name;
    }
    //Método para cambiar el nombre
    public function cambiarNombre($nombre)
    {
        $this->name = $nombre;
    }
   

  
}

$user1 = new User('Homero','Simpson','Sistemas','homero@simpson.com',123456);
echo $user1->obtenerNombre();
echo "<br>";

$user1->cambiarNombre('Bart');

echo $user1->obtenerNombre();
echo "<br>";



echo "<pre>";
var_dump($user1);
echo "</pre>";



