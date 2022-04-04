<?php  
require_once ("lib/nusoap.php");
require_once ("Conexion.php");

function InsertarCliente( $marcamoto,$nombre, $telefono, $correo){
    $conexion = new Conexion();
    $consulta = $conexion->prepare("INSERT INTO cliente( MarcaMoto, Nombre, Telefono, Correo
    VALUES(:marcamoto,:nombre,:telefono,:correo)");
          $consulta->bindParam(":marcamoto",$marcamoto,PDO::PARAM_INT);
          $consulta->bindParam(":nombre", $nombre,PDO::PARAM_STR);
          $consulta->bindParam(":telefono", $telefono, PDO::PARAM_STR);
          $consulta->bindParam(":correo", $correo, PDO::PARAM_STR);
    $ultimoid=$conexion->lastInsertid();
    return join(",", array($ultimoid));
}
$server = new soap_server();
    $server->configureWSDL('clienteservice',"urn:clienteservice");
    //$server->wsdl->schemaTargetNamespace=$ns; //Me marca error ACA
    $server->register(
        'InsertarCliente',
        array('marcamoto' => 'xsd:int' ,'nombre' => 'xsd:string','telefono' => 'xsd:string','correo' => 'xsd:string'),
        array('return'=>'xsd:string'),
        'urn:clienteservice',
        'urn:clienteservice#InsertarCliente',
        'rpc',
        'encoded',
        'insertardo Cliente de Moto con nosuap'
    );
    
$post=file_get_contents('php://input');
$server->service($post);


function EliminarCliente($IdCliente){
    $conexion = new Conexion();
    $consulta = $conexion->prepare("DELETE FROM cliente ($IdCliente 
    VALUES(:id)");
          $consulta->bindParam(":id",$IdCliente,PDO::PARAM_INT);
     
    $ultimoid=$conexion->lastInsertid();
    return join(",", array($ultimoid));
}
$server = new soap_server();
    $server->configureWSDL('clienteservice',"urn:clienteservice");
    //$server->wsdl->schemaTargetNamespace=$ns; //Me marca error ACA
    $server->register(
        'EliminarCliente',
        array('id' => 'xsd:int' ),
        array('return'=>'xsd:string'),
        'urn:clienteservice',
        'urn:clienteservice#InsertarCliente',
        'rpc',
        'encoded',
        'insertardo Cliente de Moto con nosuap'
    );

?>