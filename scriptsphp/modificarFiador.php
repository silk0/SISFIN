<?php
include "../config/conexion.php";
$bandera = $_REQUEST['bandera'];
$baccion  = $_REQUEST["idfiador"];
if ($bandera==1) {
$nombre     = $_REQUEST['nombre'];
$apellido   = $_REQUEST['apellido'];
$direccion  = $_REQUEST['direc'];
$dui        = $_REQUEST['dui'];
$nit        = $_REQUEST['nit'];
$email      = $_REQUEST['email'];
$telefono   = $_REQUEST['telefono'];
$celular    = $_REQUEST['celular'];
$trabajo    = $_REQUEST['trabajo'];
$salario    = $_REQUEST['salario'];

    $consulta  = "UPDATE tfiador set nombre='" . $nombre . "',apellido='" . $apellido . "',direccion='" . $direccion . "',dui='" . $dui . "',nit='" . $nit . "',correo='" . $email . "',profecion='" . $trabajo . "',salario='" . $salario . "',telefono='" . $telefono . "',celular='" . $celular . "' where id_fiador='" . $baccion . "'";
$resultado = $conexion->query($consulta);
  if ($resultado) {   
    header('Location:../mostrarFiadores.php?bandera=1');
  } else {
    header('Location:../mostrarFiadores.php?bandera=2');
  }   
}
?>