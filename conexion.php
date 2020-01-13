<?php
function conexion()
{
if($return=oci_connect("USU_COMUN", "Usu_Comun"))
{
	echo "conexion exitosa";
}
else
{
	echo "Conexion Fallida";
}
return $return;
}
?>