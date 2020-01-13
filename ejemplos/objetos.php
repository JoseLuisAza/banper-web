
<?php
/*class Persona
{
	public $nombre="pedro";

	public function hablar($mensaje)
	{
		echo $mensaje;
	}
}
	$persona=new Persona();
	echo $persona->nombre;
	$persona->hablar("Hola mundo");
?>*/


class Persona
{
public $nombre=array();
public $apellido=array();

public function guardar($nombre,$apellido)
{
$this->nombre[]=$nombre;
$this->apellido[]=$apellido;
}

public function mostrar()
{
	for($i=0;$i<count($this->nombre);$i++)
	{
		$this->formato($this->nombre[$i],$this->apellido[$i]);
	}
}

public function formato($nombre,$apellido)
{
	echo "Nombre: ".$nombre." Apellido".$apellido."<br>";
}
}


$Persona=new Persona();
$Persona->guardar("Jose","Cabrera");		
$Persona->guardar("Lucas","Mendez");
$Persona->mostrar();
?>