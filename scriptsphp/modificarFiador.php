<?php
include "../config/conexion.php";
$bandera = $_REQUEST['bandera'];
$baccion  = $_REQUEST["baccion"];

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
    }else if($bandera==2){
      $nombre     = $_POST['nombre'];
      $apellido   = $_POST['apellido'];
      $direccion  = $_POST['direc'];
      $dui        = $_POST['dui'];
      $usuario    = $_POST['usuario'];
      $contrasena = $_POST['contrasena'];
      $nivel      = $_POST['nivel'];
      
      
      $consulta  = "UPDATE templeados set nombre='" . $nombre . "',apellido='" . $apellido . "',zona='" . $direccion . "',dui='" . $dui . "',usuario='" . $usuario . "',pass='" . $contrasena . "',rol='" . $nivel . "' where id_empleado='" . $baccion . "'";
          $resultado = $conexion->query($consulta);
            if ($resultado) {
              header('Location:../mostrarEmpleados.php?bandera=1');
            } else {
              header('Location:../mostrarEmpleados.php?bandera=2');
            }
      
      }
?>