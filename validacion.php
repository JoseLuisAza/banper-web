	<?php
	include("conexion.php");
	$conexion=conexion();
	$var1=$_POST['usu'];
	$var2=$_POST['con'];

	if(isset($_POST['envio']))
	{
	/*	$consulta=oci_parse($conexion, "DECLARE CLARO VARCHAR2(50); BEGIN CLARO:=JOSE.PACK_IDENT.FUN_LOGINU('$var1','$var2'); END;");

		$con=oci_execute($consulta);*/

/*		$A1=$var1;
		$A2=$var2;
		$consulta=oci_parse($conexion, 'DECLARE CLARO VARCHAR2(50); BEGIN CLARO:=JOSE.PACK_IDENT.FUN_LOGINU(:A1,:A2);END;');
		oci_bind_by_name($consulta, ':A1', $A1);
		oci_bind_by_name($consulta, ':A2', $A2);
		$con=oci_execute($consulta);

		if($con==0)
		{
			echo "usuario valido".$con;		
		}
		else if($con==0)
		{
			echo "No datos ja ja".$con;
		}
		else
		{
		echo "hola".$con."m";	
		}
		oci_free_statement($consulta);
		oci_close($conexion);*/





		$A1=$var1;
		$A2=$var2;
		$consulta=oci_parse($conexion, 'BEGIN JOSE.PACK_IDENT.FUN_LOGINU(:A1,:A2);END;');
		oci_bind_by_name($consulta, ':A1', $A1);
		oci_bind_by_name($consulta, ':A2', $A2);
		$con=oci_execute($consulta);

		if($con==0)
		{
			echo "usuario valido".$con;		
		}
		else if($con==0)
		{
			echo "No datos ja ja".$con;
		}
		else
		{
		echo "hola".$con."m";	
		}
		oci_free_statement($consulta);
		oci_close($conexion);





	}	
	?>