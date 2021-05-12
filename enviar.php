<?php
	//guardo los campos en variables
	$nombre = $_POST('nombre');
	$telefono = $_POST('telefono')
	$correo = $_POST('correo')
	$mensaje = $_POST('mensaje')

	//datos del destinatario 
	$destinatario = "rafag2023gmail.com";
	$asunto "Consulta desde la Web";

	//armado del mensaje a enviar
	$carta = "De: $nombre \n";
	$carta .= "Telefono: $telefono \n";
	$carta .= "Correo: $correo \n";
	$carta .= "Mensaje: $mensaje";

	//Envio del email
	mail($destinatario, $asunto, $carta);
	//header('location:')
?>