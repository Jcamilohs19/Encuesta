<?php

$direccion= "localhost";

$usuario= "root";

$contrasena="";

$nombre_database="encuesta";



$conexion=mysqli_connect($direccion,$usuario,$contrasena,$nombre_database);

	if(mysqli_connect_errno($conexion)){
		echo "La conexion ha fallado";
	}
?>