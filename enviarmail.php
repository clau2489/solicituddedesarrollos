<?php

$area = $_POST['area'];
$responsable = $_POST['responsable'];
$correo = $_POST['mail'];
$telefono = $_POST['telefono'];
$fechaimplementacion = $_POST['fechaimplementacion'];
$tipoapp = $_POST['tipoapp'];
$nombreapp = $_POST['nombreapp'];
$descripcionapp = $_POST['descripcionapp'];
$almacenainfo = $_POST['almacenainfo'];
$recibenotificacion = $_POST['recibenotificacion'];
$nivelapp = $_POST['nivelapp'];
$integrarapp = $_POST['integrarapp'];
$perfilesapp = $_POST['perfilesapp'];
$panelapp = $_POST['panelapp'];
$esquemacolores = $_POST['esquemacolores'];
$elementosmenu = $_POST['elementosmenu'];
$datossolicitados = $_POST['datossolicitados'];


//librerias
require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "modernizacionmmp@gmail.com"; //remitente
$mail->FromName = "Sub-Secretaria de Modernizacion e Innovacion"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='modernizacionmmp@gmail.com'; //nombre usuario
$mail->Password = 'modernizacionmarcospaz55'; //contraseña


//Agregar destinatario	
$mail->AddAddress('clau_coronelmilla@hotmail.com');
$mail->Subject = "Solicitud de Desarrollos | Marcos Paz digital";
$mail->Body = " \n
Buenos días, recibiste una solicitud de Desarrollo de Aplicaciones y/o Servicios a través de http://marcospazdigital.gob.ar: \n

Area: ". $area ."\n
Responsable del area: ". $responsable ."\n
Correo electronico: ". $correo ."\n
Telefono de Contacto: ". $telefono ."\n\n
Fecha de Implementacion del Proyecto: ". $fechaimplementacion ."\n
Tipo de aplicacion: ". $tipoapp ."\n
Nombre de la aplicacion: ". $nombreapp ."\n
Descripcion de la aplicacion: ". $descripcionapp ."\n
La aplicacion almacena informacion?: ". $almacenainfo ."\n
La aplicacion recibe notificaciones?: ". $recibenotificacion ."\n
Nivel de desarrollo del Poyecto: ". $nivelapp ."\n
Aplicacion integrada con Redes Sociales?: ". $integrarapp ."\n
Posee ABM de perfiles de usuario?: ". $perfilesapp ."\n
Tiene panel de administracion?: ". $panelapp ."\n
Esquema de colores del Sitio y/o aplicacion: ". $esquemacolores ."\n
Elementos del menu: ". $elementosmenu ."\n
Solicitara algun dato especial al visitante?: ". $datossolicitados ."\n\n\n
Agradecemos que por favor, comparta esta información con los responsables del área\n
Muchas Gracias.

"
;
	
//le activamos el charset utf8
$mail->CharSet = 'UTF-8';
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
	header("Location:pantallaexito.php");
} else {
	header("Location:pantallaerror.php");
}

?>