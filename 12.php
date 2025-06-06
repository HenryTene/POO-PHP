<?php
include 'includes/header.php';

// Metodos Estaticos
// Los metodos estaticos se pueden llamar sin instanciar la clase
// Se accede a los metodos estaticos con el operador de resolucion de ambito (::)
// Se pueden llamar desde la misma clase o desde una clase hija
class User
{

    //Public: Se puede acceder desde cualquier parte del programa
    //Protected: Se puede acceder desde la misma clase y desde las clases que heredan de ella
    //Private: Se puede acceder solo desde la misma clase
    protected static $name;// Se declara como estatico
    public $lastname;
    public $department;
    public $email;
    public $code;

    //Constructor de la clase User
    public function __construct($nombre, $lastname, $department, $email, $code)
    {
        self::$name = $nombre;// Se accede a la variable estática con self::
        // $this->name = $nombre; // Se accede a la variable no estatica con $this->
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

    //Método estatico para obtener empleado
    public static function obtenerEmpleado(){

        echo "Desde metodo estatico <br>";
    }

    //Método estatico para obtener nombre
    public static function obtenerNombreEstatico(){
        return self::$name;
    }
}

//Llamada al metodo estatico
User::obtenerEmpleado();

$user1 = new User('Homero','Simpson','Sistemas','homero@simpson.com',123456);
//Llamada al metodo obtenerNombreEstatico
echo $nombre = User::obtenerNombreEstatico();


echo "<pre>";
var_dump($user1);
echo "</pre>";
