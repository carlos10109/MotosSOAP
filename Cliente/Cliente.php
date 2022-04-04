<?php
$marca=$_POST['marcamoto'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['correo'];
require_once ("lib/nusoap.php");
$cliente = new nusoap_client('http://localhost/MotosSOAP/Servidor/Server.php');

$resultadoCliente = $cliente->call('InsertarCliente', array('marcamoto'=>$marca, 'nombre'=>$nombre,'telefono'=>$telefono,'correo'=>$email));
echo $resultadoCliente;
echo $marca;
echo $nombre;
echo $telefono;
echo $email;



?>