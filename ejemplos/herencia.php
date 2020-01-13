<?php
	class Vehiculo{
		public $motor=false;
		public $marca;
		public $color;

		protected function estado()
		{
			if($this->motor)
			{
				echo "El motor esta encendido<br>";
			}	
			else
			{
				echo "El motor esta apagado<br>";
			}
		}
		public function encender()
		{
			if($this->motor)
			{
				echo "Cuidado El motor esta prendido<br>";
			}
			else
			{
				echo "El motor ahora esta encendido<br>";
				$this->motor=true;
			}
		}
	}

	//$vehiculo=new Vehiculo();
	//$vehiculo->estado();
	//$vehiculo->encender();
	//$vehiculo->estado();


	class Moto extends Vehiculo{
		public function estadoMoto()
		{
		$this->estado();
		}
	}

	$moto=new Moto();
	$moto->estadoMoto();

?>