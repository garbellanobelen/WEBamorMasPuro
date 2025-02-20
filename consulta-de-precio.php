<?php
	$mail= "amormaspuro.mascotas@gmail.com";
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];
	$producto=$_POST["producto"];
	$mensaje=$_POST["mensaje"];
	$thank="gracias.html";
	$message="
	nombre: ".$nombre."
	email: ".$email."
	telefono: ".$telefono."
	producto: ".$producto."
	mensaje: ".$mensaje."";
	if (mail ($mail,"comprar-producto",$message)) Header ("location: $thank");
	?>