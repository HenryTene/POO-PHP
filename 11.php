<?php
include 'includes/header.php';
abstract class Persona
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;


    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        return "Nombre: " . $this->nombre . "<br>" .
            "Apellido: " . $this->apellido . "<br>" .
            "Email: " . $this->email . "<br>" .
            "Telefono: " . $this->telefono . "<br>";
    }

    public function getTelefono()
    {
        return "Telefono: ".$this->telefono;
    }
}

// Herencia
class Empleado extends Persona
{

    protected $codigo;
    protected $departamento;


    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

   
}

class Proveedor extends Persona
{

    protected $empresa;



    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }


    public function mostrarInformacion()
    {
        return "Nombre: " . $this->nombre . "<br>" .
            "Apellido: " . $this->apellido . "<br>" .
            "Email: " . $this->email . "<br>" .
            "Telefono: " . $this->telefono . "<br>".
            "Empresa: " . $this->empresa . "<br>";
    }
}


// $persona1 = new Persona('Bart', 'Simpson', 'bart@simpson.com', '987654321');
// echo $persona1->mostrarInformacion();
// echo "<br>";

$empleado1 = new Empleado('Homero', 'Simpson', 'homero@simpson.com', '123456789', 9999, 'Sistemas');
echo $empleado1->mostrarInformacion();
echo "<br>";
$proveedor1 = new Proveedor('Marge', 'Simpson', 'marge@simpson.com', 987654321, 'Pepsi');
echo $proveedor1->mostrarInformacion();
echo "<br>";
echo $proveedor1->getTelefono();
echo "<br>";


echo "<pre>";
var_dump($empleado1);
echo "</pre>";
echo "<pre>";
var_dump($proveedor1);
echo "</pre>";
echo "<br>";
