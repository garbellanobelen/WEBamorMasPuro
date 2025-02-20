<?php
	$mail= "amormaspuro.mascotas@gmail.com";
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$producto=$_POST["producto"];
	$mensaje=$_POST["mensaje"];
	$thank="gracias.html";
	$message="
	nombre: ".$nombre."
	email: ".$email."
	producto: ".$producto."
	mensaje: ".$mensaje."";
	if (mail ($mail,"formulario",$message)) Header ("location: $thank");
	?>