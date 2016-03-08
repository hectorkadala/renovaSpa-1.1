<?php
		
	$nombre = $_POST['name'];
	$edad = $_POST['age'];
	$pais = $_POST['country'];
	$email = $_POST['email'];
	$hotel = $_POST['hotel'];
	$habitacion = $_POST['room'];
	$agencia = $_POST['agency'];
	$tratamiento = $_POST['treatment'];
	$terapeuta = $_POST['therapist'];
	
	require("conexion.php");
	$agregarCliente=mysql_query("INSERT INTO cliente(nombre, edad, correo_electronico, habitacion)
	 VALUES ('$nombre','$edad','$email','habitacion')");

	$agregarpais=mysql_query("INSERT INTO paises(nombre) VALUES ('$pais')");
	
	$agregarAgencia=mysql_query("INSERT INTO agencias(nombre_comercial) VALUES ('$agencia')");

	$agregarHotel=mysql_query("INSERT INTO hoteles(nombreS) VALUES ('$hotel')");

	$agregarTratamientos=mysql_query("INSERT INTO tratamientos(nombre) VALUES ('$tratamiento')");

	$agregarTerapeuta=mysql_query("INSERT INTO terapeutas(nombre) VALUES ('$terapeuta')");
	
	header("location: index.php");
	echo "Guardo con exito";
?>
