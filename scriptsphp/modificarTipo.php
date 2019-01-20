<?php
include "../config/conexion.php";
$bandera = $_REQUEST['bandera'];
$baccion  = $_REQUEST["baccion"];

if ($bandera==1) {
$tipo= $_REQUEST["tipo"];
$clasi= $_REQUEST["clasi"];
$correlativo= $_REQUEST["correlativo"];


    $consulta  = "UPDATE ttipo_activo set tipo='" . $tipo. "',clasi='" . $clasi . "',correlativo='" . $baccion . "'";
    $resultado = $conexion->query($consulta);
      if ($resultado) {
        header('Location:../listaTipoActivo.php?bandera=1');
      } else {
        header('Location:../listaTipoActivo.php?bandera=2');
      }
    }


?>