<?php 

	$destino= "dante@axolotldesign.com.ar";
	$nombre=  $_POST["nombre"];
	$email=  $_POST["email"];
	$mensaje=  $_POST["mensaje"];

	//$contenido = "Nombre: ".$nombre."\nEmail: ".$email."\nMensaje".$mensaje;

	$cabeceras = 'From:' . $nombre . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($destino,"Contacto",$mensaje,$cabeceras);

	header("Location: index.html");
?>