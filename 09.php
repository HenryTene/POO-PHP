<?php
include 'includes/header.php';

// Getters y Setters
class User{

    //Public: Se puede acceder desde cualquier parte del programa
    //Protected: Se puede acceder desde la misma clase y desde las clases que heredan de ella
    //Private: Se puede acceder solo desde la misma clase
    protected $name;
    protected $lastname;
    protected $department;
    protected $email;
    protected $code;

    //Constructor de la clase User
    public function __construct($nombre,$lastname,$department,$email, $code)
    {
        $this->name = $nombre;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

    //Método para obtener el nombre - Get
    public function getName()
    {

        return $this->name;
    }
    //Método para modificar el nombre - Set
    public function setName($nombre)
    {
        $this->name = $nombre;
    }

    //Método para obtener el codigo - Get
    public function getCode(){

        return $this->code;
    }
    //Método para modificar el codigo - Set
    public function setCode($codigo){

        $this->code = $codigo;
    }

    //Método para obtener el departamento
    public function  getDepartment(){
        return $this->department;
    }

    //Método para modificar el departamento
    public function setDepartment($departamento){
        $this->department = $departamento;
    }
   
    //Método para obtener el email
    public function getEmail(){
        return $this->email;
    }

    //Método para modificar el email
    public function setEmail($email){
        $this->email = $email;
    }

    //Método para obtener el apellido
    public function getLastname(){
        return $this->lastname;
    }
    //Método para modificar el apellido
    public function setLastname($apellido){
        $this->lastname = $apellido;
    }

  
}

$user1 = new User('Homero','Simpson','Sistemas','homero@simpson.com',123456);

$user1->setName("Bart");
$user1->setLastname("Simpson");
$user1->setDepartment("TI");
$user1->setEmail("bart@simpson.com");
$user1->setCode(32476329);


echo $user1->getName();
echo "<br>";
echo $user1->getLastname();
echo "<br>";
echo $user1->getDepartment();
echo "<br>";
echo $user1->getEmail();
echo "<br>";
echo $user1->getCode();
echo "<br>";

echo "<pre>";
var_dump($user1);
echo "</pre>";



